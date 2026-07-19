<section class="pricing" id="precios">
    <div class="pricing__inner">
        <h2 class="pricing__title">Planes</h2>
        <p class="pricing__subtitle">Un frasco de una vez, o una especie nueva cada mes.</p>

        <div class="pricing__list">
            @foreach ($plans as $plan)
                <article class="pricing-plan @if($plan['featured']) pricing-plan--featured @endif">
                    @if ($plan['featured'])
                        <span class="pricing-plan__badge">Más elegido</span>
                    @endif
                    <span class="pricing-plan__code">{{ $plan['code'] }}</span>
                    <h3 class="pricing-plan__name">{{ $plan['name'] }}</h3>
                    <p class="pricing-plan__price">
                        <span class="pricing-plan__amount">${{ $plan['price'] }}</span>
                        <span class="pricing-plan__period">{{ $plan['period'] }}</span>
                    </p>
                    <ul class="pricing-plan__list">
                        @foreach ($plan['items'] as $item)
                            <li class="pricing-plan__item">{{ $item }}</li>
                        @endforeach
                    </ul>
                    <a href="#contacto" class="pricing-plan__cta">Elegir {{ $plan['name'] }}</a>
                </article>
            @endforeach
        </div>
    </div>
</section>
