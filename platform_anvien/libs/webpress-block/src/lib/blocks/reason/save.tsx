import './editor.scss';
import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {

  return (
    <section className="reasons">
      <div className="container-fluid">
      <InnerBlocks.Content />
      </div>
    </section>

  )
}