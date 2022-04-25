import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
  const style = attributes.style == 'style-2' ? attributes.bg_color : '#fff';
  return (
    <section className={`clients ${attributes.style}`} style={{ 'background': style }}>
      <div className={`clients__${attributes.style}`}>
        <div className="container">
          <h2>{attributes.title}</h2>
          <p>{attributes.description}</p>
          <div className="clients-images">
            <InnerBlocks.Content />
          </div>
        </div>
      </div>
    </section>
  );
}