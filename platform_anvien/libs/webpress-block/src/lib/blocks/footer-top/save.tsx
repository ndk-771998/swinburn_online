import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="footer__top">
          <div className="container">
            <div className="row">
              <div className="col-md-6 footer__top-logo">
                <a href={attributes.logo_url}><img  src={attributes.logo} alt={attributes.alt} /></a>
                <h4>{attributes.name}</h4>
              </div>
              <div className="col-md-6 footer__top-icon">
                <div className="row">
                  <InnerBlocks.Content />
                </div>
              </div>
            </div>
          </div>
        </section>
    );
}