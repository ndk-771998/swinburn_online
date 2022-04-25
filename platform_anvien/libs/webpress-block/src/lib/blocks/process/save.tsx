import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="process" style={attributes.bgColor ? {'background': attributes.bgColor} : {'background' : `url(${attributes.bgImage})`}}>
        <div className="container">
          <div className="row">
            <div className="process__title col-md-12">
              <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.title}</h2>
              <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.description}</p>
            </div>
            <div className="process__content col-md-12">
            <InnerBlocks.Content />
            </div>
          </div>
        </div>
      </section>
    );
}