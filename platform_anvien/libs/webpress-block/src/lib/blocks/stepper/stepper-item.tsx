import './editor.scss';
import {
  useBlockProps,
  BlockControls,
  AlignmentToolbar,
  ColorPalette,
  InspectorControls
} from '@wordpress/block-editor';
import { Block } from '../../block.model';
import { Input } from 'antd';

import { useState } from '@wordpress/element';
import { Media, MediaSelector } from '@vicoders/editor';

import {
  ToolbarGroup,
  PanelBody,
  ToolbarDropdownMenu,
  FontSizePicker,
  __experimentalInputControl as InputControl,
} from '@wordpress/components';

import {
  more,
  edit
} from '@wordpress/icons';

const { TextArea } = Input;

export const StepperItem: Block = {
  name: 'webpress/stepper-item',
  settings: {
    apiVersion: 2,
    title: 'Stepper Item',
    slug: 'stepper-item',
    category: "widgets",
    attributes: {
      boxTitle: {
        type: 'string',
        default: ''
      },
      boxDescription: {
        type: 'string',
        default: ''
      },
      boxNumber: {
        type: 'string',
        default: ''
      },
      boxUrl: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      alt: {
        type: 'string',
        default: ''
      },
      alignmentItem: {
        type: 'string',
        default: ''
      },
      fontFamilyItem: {
        type: 'string',
        default: ''
      },
      fontSizeItemTitle: {
        type: 'string',
        default: ''
      },
      textColorItemTitle: {
        type: 'string',
        default: ''
      },
      descItemColor: {
        type: 'string',
        default: ''
      },
      descItemFontSize: {
        type: 'string',
        default: ''
      }
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const blockProps = useBlockProps();
      const { boxUrl, alt } = attributes;
      const [isMediaModalActive, setIsMediaModalActive] = useState(false);
      console.log(attributes.selectStyle);
      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      }

      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ boxUrl: media.original_url, alt: media.alt_img });
        }
      }
      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      return (
        <div {...blockProps}>
          <BlockControls>
            <AlignmentToolbar
              value={attributes.alignmentItem}
              onChange={(value: string) =>
                onChangeAttribute('alignmentItem', value)
              }
            />

            <ToolbarGroup label="Options">
              <ToolbarDropdownMenu
                icon={more}
                label="Select a font family"
                controls={[
                  {
                    title: 'Roboto',
                    onClick: () => onChangeAttribute('fontFamilyItem', 'Roboto')
                  },
                  {
                    title: 'Montserrat',
                    onClick: () => onChangeAttribute('fontFamilyItem', 'Montserrat')
                  },
                  {
                    title: 'Roboto Slab',
                    onClick: () => onChangeAttribute('fontFamilyItem', 'Roboto Slab')
                  },
                  {
                    title: 'Lobster',
                    onClick: () => onChangeAttribute('fontFamilyItem', 'Lobster')
                  },
                  {
                    title: 'Tinos',
                    onClick: () => onChangeAttribute('fontFamilyItem', 'Tinos')
                  }
                ]}
              />
              {/* <InputControl
                label="Font size(px)"
                labelPosition="edge"
                value={attributes.fontSizeItemTitle}
                onChange={(value: any) => onChangeAttribute('fontSizeItemTitle', value)}
              />
              <IconButton
                label="My very own custom button"
                icon={edit}
                className="my-custom-button"
                onClick={() => console.log('pressed button')}
              /> */}
            </ToolbarGroup>

          </BlockControls>
          <InspectorControls>
            <PanelBody>
              <p>Text Title Color</p>
              <ColorPalette
                value={attributes.textColorItemTitle}
                onChange={(value: string) =>
                  onChangeAttribute('textColorItemTitle', value)
                }
              />
              <p>Text Title Font Size</p>

              <FontSizePicker
                value={attributes.fontSizeItemTitle}
                onChange={(value: string) => onChangeAttribute('fontSizeItemTitle', value)}
              />

              <p>Text Description Color</p>
              <ColorPalette
                value={attributes.descItemColor}
                onChange={(value: string) =>
                  onChangeAttribute('descItemColor', value)
                }
              />
              <p>Text Description Font Size</p>
              <FontSizePicker
                value={attributes.descItemFontSize}
                onChange={(value: string) => onChangeAttribute('descItemFontSize', value)}
              />
            </PanelBody>
          </InspectorControls>
          <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 1, height: 1 }} />
          <div className="stepper__box__item col-12">
            <div className="row">
              <div className="col-5 stepper__box__item__title">
                <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeItemTitle, color: attributes.textColorItemTitle }} placeholder="box title" id='title' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                <TextArea style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.descItemFontSize, color: attributes.descItemColor }} rows={4} placeholder="box description" id='desc_box' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
              </div>
              <div className="col-2 stepper__box__item__step">
                <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeItemTitle, color: attributes.textColorItemTitle }} placeholder="box step" id='step' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxNumber', e.target.value)} value={attributes.boxNumber} />
              </div>
              <div className="stepper__box__item__image col-5">
                <img src={boxUrl} alt={alt} onClick={showMediaModal} />
              </div>
            </div>
          </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any }) => {
      const blockProps = useBlockProps.save();
      return (
        <div className="col-md-12 stepper__step">
          <div className="row">
            <div className="stepper__number">
              <p style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeItemTitle, color: attributes.textColorItemTitle }}>STEP {"\n"} <span>{attributes.boxNumber}</span></p>
              <div className="stepper__number-border"></div>
            </div>
            <div className="stepper__step__fullscreen">
              <div className="stepper__image">
                <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
              </div>
              <div className="stepper__text">
                <span style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeItemTitle, color: attributes.textColorItemTitle }} className="stepper__text-title">{attributes.boxTitle}</span>
                <div style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.descItemFontSize, color: attributes.descItemColor }} className="stepper__text-desc">
                  {attributes.boxDescription}
                </div>
              </div>
            </div>
          </div>
        </div>
      );
    },
  }
}
