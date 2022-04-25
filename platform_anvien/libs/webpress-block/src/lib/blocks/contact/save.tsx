import { InnerBlocks } from '@wordpress/block-editor';
export default function save({ attributes }: { attributes: any }) {
    const style = attributes.style == 'style-2' ? attributes.bg_color : '#fff';
    const day = attributes.counterDay;
    const month = attributes.counterMonth;
    const year = attributes.counterYear;
    const hour = attributes.counterHour;
    return (
        <section className="contacts">
            {(() => {
                switch (attributes.style) {
                    case 'style-1':
                        return (
                            <div className="contacts__top" style={{ 'background': style }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-6 contacts__top-left">
                                            <div className="contacts__top-title">
                                                <h2>{attributes.title}</h2>
                                                <p>
                                                    {attributes.description}
                                                </p>
                                            </div>
                                        </div>
                                        <div className="col-md-6 contacts__top-right">
                                            <div className="contacts__top-form">
                                                <form action="/send-contact-infor" method="POST" role="form" className="row">
                                                    <legend>{attributes.formHeading}</legend>
                                                    <input name="contact_form_id" value="1" hidden />
                                                    <div className="form-group col-12 col-md-12 name">
                                                        <input type="text" className="form-control" name="name" id="name" placeholder="Họ và tên: " />
                                                        <input type="hidden" id={`hidden_time_${attributes.style}`} value={`${month}/${day}/${year} ${hour}:00:00 GMT+07:00`} />
                                                        <small id="name" className="form-text text-muted">
                                                        </small>
                                                    </div>

                                                    <div className="form-group col-12 col-md-12 phone">
                                                        <input type="text" className="form-control" name="phone" id="phone" placeholder="Số điện thoại di động: " />
                                                        <small id="phone" className="form-text text-muted">

                                                        </small>
                                                    </div>

                                                    <div className="form-group col-12 col-md-12 email">
                                                        <input type="text" className="form-control" name="email" id="email" placeholder="Email:" />
                                                        <small id="email" className="form-text text-muted">

                                                        </small>
                                                    </div>

                                                    <div className="col-12">
                                                        <button type="submit" className="btn btn-primary">Call to action</button>
                                                    </div>
                                                </form>

                                                <p>{attributes.counterHeading}</p>
                                            </div>
                                            <div className="contacts__top-time">
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number day" id={`day_${attributes.style}`}></h3>
                                                    <span>ngày</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number hour" id={`hour_${attributes.style}`}></h3>
                                                    <span>giờ</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number min" id={`min_${attributes.style}`}></h3>
                                                    <span>phút</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number sec" id={`sec_${attributes.style}`}></h3>
                                                    <span>giây</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    case 'style-2':
                        return (
                            <div className="contacts__middle" style={{ 'background': style }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12 contacts__middle-title">
                                            <h2>{attributes.formHeading}</h2>
                                        </div>
                                        <div className="col-md-12 contacts__middle-form">
                                            <form action="/send-contact-infor" method="POST" role="form" className="row">
                                                <input name="contact_form_id" value="1" hidden />
                                                <div className="form-group col-12 col-md-12 name">
                                                    <input type="text" className="form-control" name="name" id="name" placeholder="Họ và tên: " />
                                                    <input type="hidden" id={`hidden_time_${attributes.style}`} value={`${month}/${day}/${year} ${hour}:00:00 GMT+07:00`} />
                                                    <input type="text" className="form-control" name="phone" id="phone" placeholder="Số điện thoại:" />
                                                    <small id="name" className="form-text text-muted">
                                                    </small>
                                                </div>

                                                <div className="form-group col-12 col-md-12 email">
                                                    <input type="text" className="form-control" name="email" id="email" placeholder="Email:" />
                                                    <small id="email" className="form-text text-muted">

                                                    </small>
                                                </div>
                                                <div className="form-group col-12 col-md-12 email">
                                                    <textarea id="note" className="form-control" name="note" placeholder="Nội dung"></textarea>
                                                    <small id="email" className="form-text text-muted">

                                                    </small>
                                                </div>
                                                <div className="col-12">
                                                    <button type="submit" className="btn btn-primary">Call to action</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div className="contacts__middle-time col-md-12">
                                            <p>{attributes.counterheading}</p>
                                            <div className="contacts__middle-item">
                                                <div className="contacts__middle-item-time">
                                                    <h3 className="contacts__middle-number day" id={`day_${attributes.style}`}></h3>
                                                    <span>ngày</span>
                                                </div>
                                                <div className="contacts__middle-item-time">
                                                    <h3 className="contacts__middle-number hour" id={`hour_${attributes.style}`}></h3>
                                                    <span>giờ</span>
                                                </div>
                                                <div className="contacts__middle-item-time">
                                                    <h3 className="contacts__middle-number min" id={`min_${attributes.style}`}></h3>
                                                    <span>phút</span>
                                                </div>
                                                <div className="contacts__middle-item-time">
                                                    <h3 className="contacts__middle-number sec" id={`sec_${attributes.style}`}></h3>
                                                    <span>giây</span>
                                                </div>
                                            </div>
                                            <p>{attributes.counterDescription}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    case 'style-3':
                        return (
                            <div className="contacts__bottom" style={{ 'background': style }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12 contacts__bottom-title">
                                            <h2>{attributes.formHeading}</h2>
                                        </div>
                                        <div className="col-md-12 contacts__bottom-form">
                                            <form action="/send-contact-infor" method="POST" role="form" className="row">
                                                <input name="contact_form_id" value="1" hidden />
                                                <div className="form-group col-12 col-md-12 name">
                                                    <input type="text" className="form-control" name="name" id="name" placeholder="Họ và tên: " />
                                                    <input type="text" className="form-control" name="phone" id="phone" placeholder="Số điện thoại:" />
                                                    <input type="hidden" id={`hidden_time_${attributes.style}`} value={`${month}/${day}/${year} ${hour}:00:00 GMT+07:00`} />
                                                    <small id="name" className="form-text text-muted">

                                                    </small>
                                                </div>

                                                <div className="form-group col-12 col-md-12 email">
                                                    <input type="text" className="form-control" name="email" id="email" placeholder="Email:" />
                                                    <small id="email" className="form-text text-muted">
                                                    </small>
                                                </div>
                                                <div className="form-group col-12 col-md-12 email">
                                                    <textarea id="note" className="form-control" name="note" placeholder="Nội dung"></textarea>
                                                    <small id="email" className="form-text text-muted">

                                                    </small>
                                                </div>
                                                <div className="col-12">
                                                    <button type="submit" className="btn btn-primary">Call to action</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div className="contacts__bottom-time col-md-12 text-center">
                                            <p>{attributes.counterHeading}</p>
                                            <div className="contacts__bottom-item">
                                                <div className="contacts__bottom-item-time">
                                                    <h3 className="contacts__bottom-number day" id={`day_${attributes.style}`}></h3>
                                                    <span>ngày</span>
                                                </div>
                                                <div className="contacts__bottom-item-time">
                                                    <h3 className="contacts__bottom-number hour" id={`hour_${attributes.style}`}></h3>
                                                    <span>giờ</span>
                                                </div>
                                                <div className="contacts__bottom-item-time">
                                                    <h3 className="contacts__bottom-number min" id={`min_${attributes.style}`}></h3>
                                                    <span>phút</span>
                                                </div>
                                                <div className="contacts__bottom-item-time">
                                                    <h3 className="contacts__bottom-number sec" id={`sec_${attributes.style}`}></h3>
                                                    <span>giây</span>
                                                </div>
                                            </div>
                                            <p>{attributes.counterDescription},</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    default:
                        return (
                            <div className="contacts__top" style={{ 'background': attributes.bg_color }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-6 contacts__top-left">
                                            <div className="contacts__top-title">
                                                <h2>{attributes.title}</h2>
                                                <p>
                                                    {attributes.description}
                                                </p>
                                            </div>
                                        </div>
                                        <div className="col-md-6 contacts__top-right">
                                            <div className="contacts__top-form">
                                                <form action="/send-contact-infor" method="POST" role="form" className="row">
                                                    <legend>{attributes.formHeading}</legend>
                                                    <input name="contact_form_id" value="1" hidden />
                                                    <div className="form-group col-12 col-md-12 name">
                                                        <input type="text" className="form-control" name="name" id="name" placeholder="Họ và tên: " />
                                                        <input type="hidden" id={`hidden_time_${attributes.style}`} value={`${month}/${day}/${year} ${hour}:00:00 GMT+07:00`} />
                                                        <small id="name" className="form-text text-muted">

                                                        </small>
                                                    </div>

                                                    <div className="form-group col-12 col-md-12 phone">
                                                        <input type="text" className="form-control" name="phone" id="phone" placeholder="Số điện thoại di động: " />
                                                        <small id="phone" className="form-text text-muted">

                                                        </small>
                                                    </div>

                                                    <div className="form-group col-12 col-md-12 email">
                                                        <input type="text" className="form-control" name="email" id="email" placeholder="Email:" />
                                                        <small id="email" className="form-text text-muted">

                                                        </small>
                                                    </div>

                                                    <div className="col-12">
                                                        <button type="submit" className="btn btn-primary">Call to action</button>
                                                    </div>
                                                </form>

                                                <p>{attributes.counterHeading}</p>
                                            </div>
                                            <div className="contacts__top-time">
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number day" id={`day_${attributes.style}`}></h3>
                                                    <span>ngày</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number hour" id={`hour_${attributes.style}`}></h3>
                                                    <span>giờ</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number min" id={`min_${attributes.style}`}></h3>
                                                    <span>phút</span>
                                                </div>
                                                <div className="contacts__top-item">
                                                    <h3 className="contacts__top-number sec" id={`sec_${attributes.style}`}></h3>
                                                    <span>giây</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                }

            })()}
        </section>
    );
}