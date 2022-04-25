import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
    return (
        <section className="photos">
            {attributes.style =='style-1' ?
            (
            <div className="photos__top">
                <div className="container">
                    <div className="row">
                        <div className="photos__top-title col-md-12">
                            <h2>{attributes.title}</h2>
                            <p>{attributes.description}</p>
                        </div>
                        <div className="photos__top-content col-md-12">
                            <div className="row">
                                <InnerBlocks.Content />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ):(
            <div className="photos__bottom" style={{'background': style}}>
                <div className="container">
                    <div className="row">
                    <div className="photos__bottom-title col-md-12">
                        <h2>{attributes.title}</h2>
                        <p>{attributes.description}</p>
                    </div>
                    <div className="photos__bottom-content col-md-12">
                        <div className="row">
                        <InnerBlocks.Content />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    )}
        </section>
    );
}