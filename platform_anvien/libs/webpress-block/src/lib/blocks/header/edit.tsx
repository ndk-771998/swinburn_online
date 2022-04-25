import { Input } from 'antd';
import './editor.scss';
import {
  useBlockProps,
  BlockControls,
  InspectorControls,
  AlignmentToolbar,
  ColorPalette
} from '@wordpress/block-editor';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';
import {
  PanelBody,
  ColorPicker,
  ToolbarGroup,
  __experimentalInputControl as InputControl,
  ToolbarDropdownMenu,
  FontSizePicker
} from '@wordpress/components';

import {
  more,
  edit
} from '@wordpress/icons';

const { TextArea } = Input;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const { boxUrl, alt } = attributes;
  const [isMediaModalActive, setIsMediaModalActive] = useState(false);

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
  const style = attributes.bg_color;

  return (
    <div {...useBlockProps({ className: attributes.style })} style={{ 'background': style }}>
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

        </ToolbarGroup>
      </BlockControls>
      <InspectorControls>
        <PanelBody title="Settings">
          <p>Background Color</p>
          <ColorPicker
            value={attributes.bg_color}
            onChange={(value: string) => onChangeAttribute('bg_color', value)}
          />
          <p>Text Color</p>
          <ColorPalette
            value={attributes.textColor}
            onChange={(value: string) =>
              onChangeAttribute('textColor', value)
            }
          />
          <p>Text Fontsize</p>
          {/* <InputControl
            label="Font size(px)"
            labelPosition="edge"
            value={attributes.fontSize}
            onChange={(value: any) => onChangeAttribute('fontSize', value)}
          /> */}
          <FontSizePicker
            value={attributes.fontSize}
            onChange={(value: any) =>
              onChangeAttribute('fontSize', value)
            }
          />
        </PanelBody>
      </InspectorControls>
      <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 1, height: 1 }} />
      <div className="row header">
        <div className="col-2 header__logo">
          <img src={boxUrl} alt={alt} onClick={showMediaModal} />
        </div>
        <div className="col-6 header__text">
          <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}
            placeholder="Link" name='link' id='link' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('download_link', e.target.value)} value={attributes.download_link} />
        </div>
        <div className="col-4 header__button">
          <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily }} placeholder="Link Button" name='ctaUrl' id='ctaUrl' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaUrl', e.target.value)} value={attributes.ctaUrl} />
          <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily }} placeholder="Text button" name='ctaText' id='ctaText' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaText', e.target.value)} value={attributes.ctaText} />
        </div>
      </div>
    </div>
  );
}