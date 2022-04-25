import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
    return (
        <section className="feedback">
            <div className={attributes.style=='style-1' ? 'feedback__style-1' : 'feedback__style-2'} style={{'background':style}}>
                <div className="container">
                    <div className={`${attributes.style=='style-1' ? 'feedback__style-1' : 'feedback__style-2'}__item__title`}>
                        <h2>{attributes.title}</h2>
                        <p>{attributes.description}</p>
                    </div>
                    <div className={`row ${attributes.style=='style-1' ? 'feedback__style-1' : 'feedback__style-2'}__item__content`}>
                        <InnerBlocks.Content />
                    </div>
                </div>
            </div>
        </section>
    );
}