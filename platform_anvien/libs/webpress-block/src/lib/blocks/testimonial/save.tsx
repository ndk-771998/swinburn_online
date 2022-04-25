import { Key } from 'react';

import { useBlockProps } from '@wordpress/block-editor';

import TestimonialItemPreview from './testimonial-item-preview';
import { Testimonial } from './testimonial.model';

export default function save({ attributes }: { attributes: any }) {
  const { items } = attributes;
  const style = {
    textAlign: attributes.alignment,
    backgroundColor: attributes.bg_color,
    color: attributes.text_color,
  };

  return (
    <div {...useBlockProps.save()}>
      <div className="testimonial">
        {items.map((item: Testimonial, index: Key | null | undefined) => <TestimonialItemPreview key={index} data={item} />)}
      </div>
    </div>
  );
}
