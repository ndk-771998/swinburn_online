import './editor.scss';

import {
  Input,
  Select,
} from 'antd';


import {
  InnerBlocks,
  useBlockProps,
  InspectorControls,
  BlockControls,
  AlignmentToolbar,
  ColorPalette
} from '@wordpress/block-editor';


import {
  PanelBody,
  ColorPicker,
  ToolbarGroup,
  FontSizePicker,
  ToolbarDropdownMenu,
  Card,
  CardMedia,
  SelectControl,
  __experimentalInputControl as InputControl,
  IconButton
} from '@wordpress/components';

import {
  more,
  edit
} from '@wordpress/icons';

import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';

const ProcessHeadingTeamplate = [
  ['core/heading', { placeholder: 'Process Title' }],
  ['core/paragraph', { placeholder: 'Process Summary' }],
];

const ProcessItemTeamplate = [
  ['webpress/process-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/process-item'];

const { TextArea } = Input;
const { Option } = Select;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  console.log({ attributes, isSelected, setAttributes });
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });
  }
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
    <div className="process"  {...useBlockProps()} style={{ 'background': style }}>
      <InspectorControls>
        <PanelBody title="Settings">
          <SelectControl
            label="Select Background"
            value={attributes.selectBackground}
            options={[
              { value: 'image', label: 'Background Image' },
              { value: 'color', label: 'Background Color' },

            ]}
            onChange={(value: string) => onChangeAttribute('selectBackground', value)}
          />

        </PanelBody>
        {
          attributes.selectBackground == "color" ? (
            <PanelBody>
              <ColorPicker
                value={attributes.bgColor}
                onChange={(value: string) => onChangeAttribute('bgColor', value)}
              />
            </PanelBody>
          ) : (
            <PanelBody>
              <Card>
                <CardMedia>
                  <img src={bgImage} alt={bgAlt} onClick={showMediaModalBg} />
                </CardMedia>
              </Card>
            </PanelBody>
          )
        }
        <PanelBody>
          <p>Text Title Color</p>
          <ColorPalette
            value={attributes.textColor}
            onChange={(value: string) =>
              onChangeAttribute('textColor', value)
            }
          />
          <p>Text Title Font Size</p>
          <FontSizePicker
            value={attributes.fontSize}
            onChange={(value: string) => onChangeAttribute('fontSize', value)}
          />

          <p>Text Description Color</p>
          <ColorPalette
            value={attributes.descColor}
            onChange={(value: string) =>
              onChangeAttribute('descColor', value)
            }
          />
          <p>Text Description Font Size</p>
          <FontSizePicker
            value={attributes.descFontSize}
            onChange={(value: string) => onChangeAttribute('descFontSize', value)}
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
      </BlockControls>
      <div className="row">
        <div className="col-12">
          <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="Title" name='title' id='title' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
        </div>
        <div className="col-12">
          <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} placeholder="box description" id='desc_box' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />
        </div>
        <div className="col-12 process__box">
          <InnerBlocks
            template={ProcessItemTeamplate}
            allowedBlocks={ALLOWED_BLOCKS}
          />
        </div>
      </div>
    </div>
  );
}
