<section class="feature-grid" id="especies">
    <div class="feature-grid__inner">
        <h2 class="feature-grid__title">Qué trae cada frasco</h2>
        <p class="feature-grid__subtitle">Cuatro decisiones de diseño para que el ecosistema se sostenga solo.</p>

        <div class="feature-grid__list">
            @foreach ($features as $feature)
                <article class="feature-card @if($feature['featured']) feature-card--featured @endif">
                    <span class="feature-card__code">{{ $feature['code'] }}</span>
                    <h3 class="feature-card__title">{{ $feature['title'] }}</h3>
                    <p class="feature-card__description">{{ $feature['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
