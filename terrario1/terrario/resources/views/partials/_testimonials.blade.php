<section class="testimonial-section" id="testimonios">
    <div class="testimonial-section__inner">
        <h2 class="testimonial-section__title">Ocho meses después, siguen vivos</h2>

        <div class="testimonial-section__list">
            @foreach ($testimonials as $testimonial)
                <figure class="testimonial testimonial--{{ $testimonial['variant'] }}">
                    <blockquote class="testimonial__quote">{{ $testimonial['quote'] }}</blockquote>
                    <figcaption class="testimonial__author">
                        <span class="testimonial__avatar">{{ $testimonial['avatar'] }}</span>
                        <span class="testimonial__author-info">
                            <span class="testimonial__name">{{ $testimonial['name'] }}</span>
                            <span class="testimonial__role">{{ $testimonial['role'] }}</span>
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>
