import { Testimonial } from './testimonial.model';

interface Props {
  data: Testimonial,
}
export default function TestimonialItemPreview(props: Props) {
  return (
    <div className="testimonial">
      <div className="testimonial__item d-flex">
        <div className="testimonial__item__image" style={{ backgroundImage: `url("${props.data.img}")` }}>
        </div>
        <div className="testimonial__item__message flex-grow-1">
          <p className="message">{props.data.message}</p>
        </div>
      </div>
    </div>
  )
}
