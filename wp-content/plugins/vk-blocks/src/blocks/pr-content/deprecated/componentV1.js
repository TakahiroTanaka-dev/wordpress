import classNames from "classnames";
const { __ } = wp.i18n; // Import __() from wp.i18n
const { Button } = wp.components;
const { Component,Fragment } = wp.element;
import { vkbBlockEditor, fixBrokenUnicode } from "./../../_helper/depModules";
const { MediaUpload, RichText } = vkbBlockEditor;

export class Fontawesome extends Component {

	render() {
			const {
					buttonText,
					fontAwesomeIconBefore,
					fontAwesomeIconAfter,
			} = this.props.attributes;

			let iconBefore = '';
			let iconAfter = '';


			if (fontAwesomeIconBefore) {
					iconBefore = <i className={ `${fontAwesomeIconBefore} vk_button_link_before` }></i> ;
			}
			if (fontAwesomeIconAfter) {
					iconAfter = <i className={ `${fontAwesomeIconAfter} vk_button_link_after` }></i>;
			}

			return (
				<Fragment>
					{ iconBefore }
					<span className="vk_button_link_txt">{ buttonText }</span>
					{ iconAfter }
				</Fragment>
			);
	}
}

export class ComponentV1 extends Component {
  render() {
    const attributes = this.props.attributes;
    let {
      title,
      titleColor,
      content,
      contentColor,
      url,
      buttonType,
      buttonColor,
      buttonColorCustom,
      buttonText,
      buttonTarget,
      Image,
      ImageBorderColor,
      layout,
      fontAwesomeIconBefore,
      fontAwesomeIconAfter
		} = attributes;

    const setAttributes = this.props.setAttributes;
    const className = this.props.className;
    const for_ = this.props.for_;
    let containerClass = "vk_prContent";
    let btnClass = "vk_button";
    let aClass = "btn btn-block vk_button_link vk_prContent_colTxt_btn";
    let aStyle = {};
    let imageBorderProperty = "none";

    if (layout === "right") {
      containerClass = classNames(
        className,
        containerClass,
        "vk_prContent-layout-imageRight"
      );
    } else {
      containerClass = classNames(
        className,
        containerClass,
        "vk_prContent-layout-imageLeft"
      );
    }

    if (buttonColorCustom) {
      btnClass = `${btnClass} vk_button-color-custom`;
      aClass = `${aClass} btn-primary`;

      // 塗り
      if (buttonType === "0") {
        aStyle = {
          backgroundColor: buttonColorCustom,
          border: `1px solid ${buttonColorCustom}`
        };
        // 塗りなし
      } else if (buttonType === "1") {
        aStyle = {
          backgroundColor: "transparent",
          border: "1px solid " + buttonColorCustom,
          color: buttonColorCustom
        };
      }

      // カスタムカラーじゃない場合
    } else if (!buttonColorCustom) {
      // 塗り
      if (buttonType === "0") {
        aClass = `${aClass} btn-${buttonColor}`;
        aStyle = null;
        // 塗りなし
      } else if (buttonType === "1") {
        aClass = `${aClass} btn-outline-${buttonColor}`;
        aStyle = null;
      }
    }

    //borderColorが指定されなかった場合はボーダーを非表示に
    if (ImageBorderColor) {
      imageBorderProperty = `1px solid ${ImageBorderColor}`;
    } else {
      imageBorderProperty = `none`;
    }

    const saveImage = value => {
      if (value) {
        setAttributes({ Image: JSON.stringify(value) });
      }
    };

    const renderImage = for_ => {
      if (for_ === "edit") {
        if (Image && Image.indexOf("{") === -1) {
          return (
	<MediaUpload
		onSelect={ value => setAttributes({ Image: value.sizes.full.url }) }
		type=" image"
		value={ Image }
		render={ ({ open }) => (
			<Button
				onClick={ open }
				className={ Image ? "image-button" : "button button-large" }
                >
				{ !Image ? (
                    __("Select image", "vk-blocks")
                  ) : (
	<img
		className={ "vk_prContent_colImg_image" }
		src={ Image }
		alt={ __("Upload image", "vk-blocks") }
		style={ { border: imageBorderProperty } }
                      />
                    ) }
			</Button>
              ) }
            />
          );
				}
          const ImageParse = JSON.parse( fixBrokenUnicode(Image) );
          return (
	<MediaUpload
		onSelect={ saveImage }
		type=" image"
		value={ ImageParse }
		render={ ({ open }) => (
			<Button
				onClick={ open }
				className={
                    ImageParse ? "image-button" : "button button-large"
                  }
                >
				{ Image === null || typeof ImageParse.sizes === "undefined" ? (
                    __("Select image", "vk-blocks")
                  ) : (
	<img
		className={ "vk_prContent_colImg_image" }
		src={ ImageParse.sizes.full.url }
		alt={ ImageParse.alt }
		style={ { border: imageBorderProperty } }
                      />
                    ) }
			</Button>
              ) }
            />
          );

      } else if (for_ === "save") {
        if (!Image) {
          return __("Select image", "vk-blocks");
        }
          if (Image && Image.indexOf("{") === -1) {
            return (
	<img
		className={ "vk_prContent_colImg_image" }
		src={ Image }
		alt={ __("Upload image", "vk-blocks") }
		style={ { border: imageBorderProperty } }
              />
            );
					}
            const ImageParse = JSON.parse( fixBrokenUnicode(Image) );
            if (ImageParse && typeof ImageParse.sizes !== "undefined") {
              return (
	<img
		className={ "vk_prContent_colImg_image" }
		src={ ImageParse.sizes.full.url }
		alt={ ImageParse.alt }
		style={ { border: imageBorderProperty } }
                />
              );
            }
              return "";



      }
		};

    return (
	<div className={ containerClass }>
		<div className="col-sm-6 vk_prContent_colImg">{ renderImage(for_) }</div>
		<div className="col-sm-6 vk_prContent_colTxt">
			{ (() => {
            if (for_ === "edit") {
              return (
	<Fragment>
		<RichText
			tagName="h3"
			className={ "vk_prContent_colTxt_title" }
			onChange={ value => setAttributes({ title: value }) }
			value={ title }
			placeholder={ __("Input title.", "vk-blocks") }
			style={ { color: titleColor } }
                  />
		<RichText
			tagName="p"
			className={ "vk_prContent_colTxt_text" }
			onChange={ value => setAttributes({ content: value }) }
			value={ content }
			placeholder={ __("Input content.", "vk-blocks") }
			style={ { color: contentColor } }
                  />
	</Fragment>
              );
            }
              return (
	<Fragment>
		<RichText.Content
			tagName="h3"
			value={ title }
			className={ "vk_prContent_colTxt_title" }
			style={ { color: titleColor } }
                  />
		<RichText.Content
			tagName="p"
			className={ "vk_prContent_colTxt_text" }
			value={ content }
			style={ { color: contentColor } }
                  />
	</Fragment>
              );

          })() }
			{ //ボタンテキストが入力されるとボタンを表示。
            (() => {
              if (buttonText !== "" && buttonText !== undefined) {
                return (
	<div className={ btnClass }>
		<a
			href={ url }
			className={ aClass }
			target={ buttonTarget ? "_blank" : null }
			style={ aStyle }
			rel="noopener noreferrer"
                    >
			<Fontawesome attributes={ attributes } />
		</a>
	</div>
                );
              }
            })() }
		</div>
	</div>
    );
  }
}