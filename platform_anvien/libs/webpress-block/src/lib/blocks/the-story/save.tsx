import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }: { attributes: any }) {
  return (
    <section className="story">
      <InnerBlocks.Content />
    </section>
  )
}
