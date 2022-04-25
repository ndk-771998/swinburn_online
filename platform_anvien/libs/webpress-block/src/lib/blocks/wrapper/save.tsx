import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    return (
        <div className="wrapper">
            <InnerBlocks.Content />
        </div>
    );
}