import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="stepper" style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
            <div className="container">
                <div className="row">
                    <div className="stepper__title">
                        <h2 style={{
                            textAlign: attributes.alignment,
                            fontFamily: attributes.fontFamily,
                            fontSize: attributes.fontSize, color: attributes.textColor
                        }}>{attributes.title}</h2>
                        <p style={{
                            textAlign: attributes.alignment,
                            fontFamily: attributes.fontFamily,
                            fontSize: attributes.descFontSize, color: attributes.descColor
                        }}>{attributes.description}</p>
                    </div>
                    <div className="stepper__steps">
                        <InnerBlocks.Content />
                    </div>
                </div>
            </div>
        </section>
    );
}