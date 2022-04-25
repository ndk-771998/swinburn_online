import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="highlights" style={{ 'background': attributes.bgColor }}>
            {attributes.selectStyle == 'style-1' &&
                (
                    <div className="highlights__top">
                        <div className="container">
                            <div className="row">
                                <div className="highlights__title-top col-md-12">
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
                                <div className="highlights__content-top col-md-12">
                                    <div className="row highlights__content-top__slide">
                                        <InnerBlocks.Content />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className='button_link'><a style={{
                            fontFamily: attributes.fontFamily,
                        }} className='button' href={attributes.ctaUrl}>{attributes.ctaText}</a></div>
                    </div>
                )
            }
            {attributes.selectStyle == 'style-2' &&
                (
                    <div className="highlights__middle" style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
                        <div className="container">
                            <div className="row">
                                <div className="highlights__title-middle">
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
                                <div className="highlights__content-middle row">
                                    <InnerBlocks.Content />
                                </div>
                            </div>
                        </div>
                    </div>
                )
            }
            {attributes.selectStyle == 'style-3' &&
                (
                    <div className="highlights__bottom" style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
                        <div className="container">
                            <div className="row">
                                <div className="highlights__bottom-title col-md-12">
                                    <h2 style={{
                                        textAlign: attributes.alignment,
                                        fontFamily: attributes.fontFamily,
                                        fontSize: attributes.fontSize,
                                        color: attributes.textColor
                                    }}>{attributes.title}</h2>
                                    <p style={{
                                        textAlign: attributes.alignment,
                                        fontFamily: attributes.fontFamily,
                                        fontSize: attributes.descFontSize,
                                        color: attributes.descColor
                                    }}>{attributes.description}</p>
                                </div>
                                <div className="highlights__content-bottom">
                                    <div className="row">
                                        <InnerBlocks.Content />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                )
            }
        </section>
    );
}