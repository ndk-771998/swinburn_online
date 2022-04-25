import './editor.scss';

import { Key } from 'react';

import { Button } from 'antd';
import { plainToInstance } from 'class-transformer';

import { AppstoreAddOutlined } from '@ant-design/icons';
import {
  AlignmentToolbar,
  BlockControls,
  ColorPalette,
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';

import TestimonialItem from './testimonial-item';
import TestimonialItemPreview from './testimonial-item-preview';
import { Testimonial } from './testimonial.model';

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const items = attributes.items.map((i: Testimonial) => plainToInstance(Testimonial, i));

  const handleChange = (item: any, data: Record<string, string>) => {
    setAttributes({ items: items.map((i: any) => i === item ? { ...item, ...data } : i) })
  }

  const onChangeAlignment = (newAlignment: undefined) => {
    setAttributes({
      alignment: newAlignment === undefined ? 'none' : newAlignment,
    });
  };

  const style = {
    textAlign: attributes.alignment,
    backgroundColor: attributes.bg_color,
    color: attributes.text_color,
  };
  const onChangeBGColor = (hexColor: any) => {
    setAttributes({ bg_color: hexColor });
  };

  const onChangeTextColor = (hexColor: any) => {
    setAttributes({ text_color: hexColor });
  };


  const addTestimonial = () => {
    const newItem = { user: '', message: '', img: '/assets/images/user.png' };
    setAttributes({ items: [...items, newItem] })
  }


  return (
    <div {...useBlockProps()}>
      <BlockControls>
        <AlignmentToolbar
          value={attributes.alignment}
          onChange={onChangeAlignment}
        />
      </BlockControls>
      <InspectorControls key="setting">
        <div id="gutenpride-controls">
          <fieldset>
            <legend className="blocks-base-control__label">
              Background color
            </legend>
            <ColorPalette
              onChange={onChangeBGColor}
            />
          </fieldset>
          <fieldset>
            <legend className="blocks-base-control__label">
              Text color
            </legend>
            <ColorPalette
              onChange={onChangeTextColor}
            />
          </fieldset>
        </div>
      </InspectorControls>
      {!isSelected ? (
        <div>
          {items.map((item: Testimonial, index: Key | null | undefined) => <TestimonialItemPreview key={index} data={item} />)}
        </div>
      ) : (
        <div>
          {items.map((item: Testimonial, index: Key | null | undefined) => <TestimonialItem key={index} data={item} onChangeCallback={handleChange} />)}
        </div>
      )}
      <Button icon={<AppstoreAddOutlined />} onClick={addTestimonial} >Thêm</Button>
    </div>
  );
}
