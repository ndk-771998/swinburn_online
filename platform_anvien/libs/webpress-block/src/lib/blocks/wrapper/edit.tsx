import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';
export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
    return (
        
        <div className="wrapper"  {...useBlockProps()}>
            <h2>Wrapper Block</h2>
            <InnerBlocks />
        </div>

    );
}