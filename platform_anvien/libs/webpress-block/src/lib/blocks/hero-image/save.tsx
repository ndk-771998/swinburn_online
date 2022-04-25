import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
  const style = {
    textAlign: attributes.alignment,
    backgroundColor: attributes.bg_color,
    color: attributes.text_color,
  };

  return (
    <div {...useBlockProps.save()}>
      <div style={style}>{attributes.message}</div>
    </div>
  );
}
