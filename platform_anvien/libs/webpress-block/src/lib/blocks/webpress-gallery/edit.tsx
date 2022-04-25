import { Input, Select } from 'antd';
import './editor.scss';
import { Media, MediaSelector } from '@vicoders/editor';
import {
    AlignmentToolbar,
    BlockControls,
    InnerBlocks,
    InspectorControls,
    useBlockProps,
    ColorPalette,
  } from '@wordpress/block-editor';
  import {
    PanelBody,
    SelectControl,
    ToolbarGroup,
    ToolbarDropdownMenu,
    ColorPicker,
    FontSizePicker,
    Card,
    CardMedia,
  } from '@wordpress/components';
  import { more } from '@wordpress/icons';
  import { useState } from '@wordpress/element';
const { TextArea } = Input;
const { Option } = Select;
const GalleryItemTeamplate = [
  ['webpress/webpress-gallery-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/webpress-gallery-item'];

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
    const [isMediaModalInspectorActive, setIsMediaModalInspectorActive] =
    useState(false);
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });
  };
  const showMediaInspectorModal = () => {
    setIsMediaModalInspectorActive(!isMediaModalInspectorActive);
  };
  const onSelectInspector = (media: Media | undefined) => {
    if (media) {
      setAttributes({ bgImage: media.original_url, alt: media.alt_img });
    }
  };
      const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
    return (
        
        <div {...useBlockProps()}>
            <BlockControls>
            <AlignmentToolbar
              value={attributes.alignment}
              onChange={(value: string) =>
                onChangeAttribute('alignment', value)
              }
            />
            <ToolbarGroup>
              <ToolbarDropdownMenu
                icon={more}
                label="Select a font family"
                controls={[
                  {
                    title: 'Roboto',
                    onClick: () => onChangeAttribute('fontFamily', 'Roboto'),
                  },
                  {
                    title: 'Montserrat',
                    onClick: () =>
                      onChangeAttribute('fontFamily', 'Montserrat'),
                  },
                  {
                    title: 'Roboto Slab',
                    onClick: () =>
                      onChangeAttribute('fontFamily', 'Roboto Slab'),
                  },
                  {
                    title: 'Lobster',
                    onClick: () => onChangeAttribute('fontFamily', 'Lobster'),
                  },
                  {
                    title: 'Tinos',
                    onClick: () => onChangeAttribute('fontFamily', 'Tinos'),
                  },
                ]}
              />

              {/* <IconButton
                label="My very own custom button"
                icon={edit}
                className="my-custom-button"
                onClick={() => console.log('pressed button')}
              /> */}
            </ToolbarGroup>
          </BlockControls>

          <InspectorControls>
            <PanelBody title="Content Settings">
              <p>Title Color</p>
              <ColorPalette
                value={attributes.titleColor}
                onChange={(value: string) =>
                  onChangeAttribute('titleColor', value)
                }
              />
              <p>Title Font size(px)</p>
              <FontSizePicker
                value={attributes.titleFontSize}
                onChange={(value: any) =>
                  onChangeAttribute('titleFontSize', value)
                }
              />
              <p>Description Color</p>
              <ColorPalette
                value={attributes.descriptionColor}
                onChange={(value: string) =>
                  onChangeAttribute('descriptionColor', value)
                }
              />
              <p>Description Font size(px)</p>
              <FontSizePicker
                value={attributes.descriptionFontSize}
                onChange={(value: any) =>
                  onChangeAttribute('descriptionFontSize', value)
                }
              />
            </PanelBody>
            <PanelBody title="General Settings">
              <SelectControl
                label="Select Style"
                value={attributes.style}
                options={[
                  { value: 'style-1', label: 'Style 1' },
                  { value: 'style-2', label: 'Style 2' },
                ]}
                onChange={(value: string) => onChangeAttribute('style', value)}
              />
              <SelectControl
                label="Select Background"
                value={attributes.selectBackground}
                options={[
                  { value: 'color', label: 'Background Color' },
                  { value: 'image', label: 'Background Image' },
                ]}
                onChange={(value: string) =>
                  onChangeAttribute('selectBackground', value)
                }
              />
              {attributes.selectBackground == 'color' ? (
                <ColorPicker
                  value={attributes.bgColor}
                  onChange={(value: string) =>
                    onChangeAttribute('bgColor', value)
                  }
                />
              ) : (
                <Card>
                  <MediaSelector
                    isModalVisible={isMediaModalInspectorActive}
                    onSelect={onSelectInspector}
                    aspect={{ width: 1, height: 1 }}
                  />
                  <CardMedia>
                    <img
                      src={attributes.bgImage}
                      alt={attributes.alt}
                      onClick={showMediaInspectorModal}
                    />
                  </CardMedia>
                </Card>
              )}
            </PanelBody>
          </InspectorControls>
            <div className={`gallery ${attributes.style}`}  
            style={
                attributes.selectBackground == 'color'
                ? { background: attributes.bgColor }
                : { backgroundImage: `url(${attributes.bgImage})` 
            }
          }>

                <div className="row">
                    <div className="col-12 gallery__title">
                        <Input 
                        style={{
                            textAlign: attributes.alignment,
                            fontFamily: attributes.fontFamily,
                            fontSize: attributes.titleFontSize,
                            color: attributes.titleColor,
                          }}
                        placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title',e.target.value)} value={attributes.title} />
                    </div>
                    <div className="col-12 gallery__description">
                        <TextArea
                        style={{
                            textAlign: attributes.alignment,
                            fontFamily: attributes.fontFamily,
                            fontSize: attributes.descriptionFontSize,
                            color: attributes.descriptionColor,
                          }}
                        rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />

                    </div>
                    <div className="gallery__box">
                        <InnerBlocks
                            template={GalleryItemTeamplate}
                            allowedBlocks={ALLOWED_BLOCKS}
                        />
                    </div>
                </div>
            </div>
        </div>

    );
}