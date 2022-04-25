export default function save({ attributes }: { attributes: any }) {
    return (
        <section className="header" style={{'background': attributes.bg_color}}>
        <div className="container">
          <div className="row">
            <div className="col-2 col-md-4 header__logo">
              <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
            </div>
            <div className="col-10 col-md-8 header__button">
              <span style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.download_link}</span>
              <a href={attributes.ctaUrl} style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily }}>{attributes.ctaText}</a>
            </div>
          </div>
        </div>
      </section>
    )
  }
