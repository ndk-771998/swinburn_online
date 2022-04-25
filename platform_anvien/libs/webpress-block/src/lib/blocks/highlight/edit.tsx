import './editor.scss';

import {
  Input,
  Select,
} from 'antd';

import { Media, MediaSelector } from '@vicoders/editor';

import {
  InnerBlocks,
  useBlockProps,
  BlockControls,
  InspectorControls,
  AlignmentToolbar,
  ColorPalette
} from '@wordpress/block-editor';

import { useState } from '@wordpress/element';

import {
  more,
  edit
} from '@wordpress/icons';

import {
  PanelBody,
  SelectControl,
  ColorPicker,
  ToolbarGroup,
  FontSizePicker,
  ToolbarDropdownMenu,
  Card,
  CardMedia,
  __experimentalInputControl as InputControl,
} from '@wordpress/components';


import { HighlightBlockContext } from './highlight.context';

const HighlightHeadingTeamplate = [
  ['core/heading', { placeholder: 'Highlight Title' }],
  ['core/paragraph', { placeholder: 'Highlight Summary' }],
];

const HightlightItemTeamplate = [
  ['webpress/highlight-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/highlight-item'];

const { TextArea } = Input;
const { Option } = Select;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  console.log({ attributes, isSelected, setAttributes });
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });
  }
  const blockProps = useBlockProps();
  const { bgImage, bgAlt } = attributes;
  const [isMediaModalBackgroundActive, setIsMediaModalBackgroundActive] = useState(false);

  const showMediaModalBg = () => {
    setIsMediaModalBackgroundActive(!isMediaModalBackgroundActive);
  }

  const onSelectBg = (media_bg: Media | undefined) => {
    if (media_bg) {
      setAttributes({ bgImage: media_bg.original_url, bgAlt: media_bg.alt_img });
    }
  }

  const style = attributes.bgColor;
  return (
    <div className="hightlight"  {...useBlockProps()} style={{ 'background': style }}>
      <MediaSelector isModalVisible={isMediaModalBackgroundActive} onSelect={onSelectBg} aspect={{ width: 2, height: 1 }} />
      <HighlightBlockContext.Provider value={attributes}>
        <InspectorControls>
          <PanelBody title="Settings">
            <SelectControl
              label="Select Style"
              value={attributes.selectStyle}
              options={[
                { value: 'style-1', label: 'Style 1' },
                { value: 'style-2', label: 'Style 2' },
                { value: 'style-3', label: 'Style 3' },
              ]}
              onChange={(value: string) => onChangeAttribute('selectStyle', value)}
            />
            <p>Title Color</p>
            <ColorPalette
              value={attributes.textColor}
              onChange={(value: string) =>
                onChangeAttribute('textColor', value)
              }
            />
            <p>Title Font Size </p>
            <FontSizePicker
              value={attributes.fontSize}
              onChange={(value: any) =>
                onChangeAttribute('fontSize', value)
              }
            />

            <p>Description Color</p>
            <ColorPalette
              value={attributes.descColor}
              onChange={(value: string) =>
                onChangeAttribute('descColor', value)
              }
            />
            <p>Description Font Size </p>
            <FontSizePicker
              value={attributes.descFontSize}
              onChange={(value: any) =>
                onChangeAttribute('descFontSize', value)
              }
            />
          </PanelBody>
        </InspectorControls>

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
            {/* <InputControl
              label="Font size(px)"
              labelPosition="edge"
              value={attributes.fontSize}
              onChange={(value: any) => onChangeAttribute('fontSize', value)}
            />
            <IconButton
              label="My very own custom button"
              icon={edit}
              className="my-custom-button"
              onClick={() => console.log('pressed button')}
            /> */}
          </ToolbarGroup>
          <InspectorControls>
            {
              attributes.selectStyle == 'style-1' ? (
                <a href=""></a>
              ) : (
                attributes.selectBackground == "color" ? (
                  <PanelBody title="Background Type">
                    <SelectControl
                      value={attributes.selectBackground}
                      options={[
                        { value: 'color', label: 'Background Color' },
                        { value: 'image', label: 'Background Image' }
                      ]}
                      onChange={(value: string) => onChangeAttribute('selectBackground', value)}
                    />
                    <ColorPicker
                      value={attributes.bgColor}
                      onChange={(value: string) => onChangeAttribute('bgColor', value)}
                    />
                  </PanelBody>
                ) : (

                  <PanelBody title="Background Type">
                    <SelectControl
                      label=""
                      value={attributes.selectBackground}
                      options={[
                        { value: 'color', label: 'Background Color' },
                        { value: 'image', label: 'Background Image' }
                      ]}
                      onChange={(value: string) => onChangeAttribute('selectBackground', value)}
                    />
                    <Card>
                      <CardMedia>
                        <img src={bgImage} alt={bgAlt} onClick={showMediaModalBg} />
                      </CardMedia>
                    </Card>
                  </PanelBody>
                )
              )
            }
          </InspectorControls>
        </BlockControls>
        <div className="row" style={attributes.selectStyle == "style-1" ? { "background": '#ffffff' } : { "background": style }}>
          <div className="col-12">
            <Input style={{
              textAlign: attributes.alignment,
              fontFamily: attributes.fontFamily,
              fontSize: attributes.fontSize, color: attributes.textColor
            }} placeholder="Title" name='title' id='title' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
          </div>
          {attributes.selectStyle == 'style-1' &&
            (
              <div className="col-6">
                <Input placeholder="Link" name='link' id='link' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaUrl', e.target.value)} value={attributes.ctaUrl} />
              </div>

            )
          }
          {attributes.selectStyle == 'style-1' &&
            (
              <div className="col-6">
                <Input style={{
                  fontFamily: attributes.fontFamily,
                }} placeholder="Text Button" name='text' id='text' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaText', e.target.value)} value={attributes.ctaText} />
              </div>

            )
          }
          <div className="col-12">
            <TextArea style={{
              textAlign: attributes.alignment,
              fontFamily: attributes.fontFamily,
              fontSize: attributes.descFontSize, color: attributes.descColor
            }} rows={4} id='description' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />
          </div>
          <div className="col-12 hightlight__box">
            <InnerBlocks
              template={HightlightItemTeamplate}
              allowedBlocks={ALLOWED_BLOCKS}
            />
          </div>
        </div>
      </HighlightBlockContext.Provider>
    </div>
  );
}
