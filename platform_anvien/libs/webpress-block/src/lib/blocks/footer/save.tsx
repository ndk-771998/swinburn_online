import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="footer">

        <div className="footer__line"></div>
        <div className="footer__middle">
          <div className="container">
            <div className=" row">
              <div className="footer__middle-content col-md-12">
                <div className="row">
                  <InnerBlocks.Content />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="footer__bottom">
          <div className="container">
            <div className="row">
              <span>{attributes.copyright}</span>
            </div>
          </div>
        </div>
      </section>
    );
}