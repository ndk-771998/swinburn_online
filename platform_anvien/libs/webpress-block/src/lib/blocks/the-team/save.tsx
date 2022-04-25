import { InnerBlocks } from '@wordpress/block-editor';
import { TeamBlockContext } from './team.context';
export default function save({ attributes }: { attributes: any }) {
  return (
    <TeamBlockContext.Provider value={attributes}>
      <section className={`team ${attributes.style} `}>
        {attributes.style == 'style-1' ? (
          <div
            className="team__top"
            style={
              attributes.bg_color != null
                ? { background: attributes.bg_color }
                : { background: '#ffffff' }
            }
          >
            <div className="container">
              <div className="row">
                <div className="team__top-title col-md-12">
                  <h2
                    style={{
                      textAlign: attributes.alignment,
                      fontFamily: attributes.fontFamily,
                      fontSize: attributes.titleFontSize,
                      color: attributes.titleColor,
                    }}
                  >
                    {attributes.title}
                  </h2>
                  <p
                    style={{
                      textAlign: attributes.alignment,
                      fontFamily: attributes.fontFamily,
                      fontSize: attributes.descriptionFontSize,
                      color: attributes.descriptionColor,
                    }}
                  >
                    {attributes.description}
                  </p>
                </div>
                <div className="team__top-content team__responsive">
                  <div className="row">
                    <InnerBlocks.Content />
                  </div>
                </div>
              </div>
            </div>
          </div>
        ) : (
          <div
            className="team__bottom"
            style={
              attributes.selectBackground == 'color'
                ? attributes.bg_color != null
                  ? { background: attributes.bg_color }
                  : { background: '#323232' }
                : { backgroundImage: `url(${attributes.bgImage})` }
            }
          >
            <div className="container">
              <div className="row">
                <div className="team__bottom-title col-md-12">
                  <h2
                    style={{
                      textAlign: attributes.alignment,
                      fontFamily: attributes.fontFamily,
                      fontSize: attributes.titleFontSize,
                      color: attributes.titleColor,
                    }}
                  >
                    {attributes.title}
                  </h2>
                  <p
                    style={{
                      textAlign: attributes.alignment,
                      fontFamily: attributes.fontFamily,
                      fontSize: attributes.descriptionFontSize,
                      color: attributes.descriptionColor,
                    }}
                  >
                    {attributes.description}
                  </p>
                </div>
                <InnerBlocks.Content />
              </div>
            </div>
          </div>
        )}
      </section>
    </TeamBlockContext.Provider>
  );
}
