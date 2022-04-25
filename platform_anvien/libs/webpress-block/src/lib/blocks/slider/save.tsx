import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    console.log({ attributes });

    return (
        <section className="slider">
            <div className="slider__slide" id='slider__slide'>
                <InnerBlocks.Content />
            </div>
            <div className="slider__background">
                <img src={attributes.image_background} alt={attributes.alt_background} />
            </div>
        </section>
    );
}

