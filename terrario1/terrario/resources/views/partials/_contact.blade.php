<section class="contact" id="contacto">
    <div class="contact__inner">
        <div class="contact__intro">
            <h2 class="contact__title">Cuéntanos de tu espacio</h2>
            <p class="contact__subtitle">
                Luz, tamaño y presupuesto. Te respondemos con la especie que mejor se adapta.
            </p>
        </div>

        <form class="contact-form" method="POST" action="{{ route('landing.contact') }}" novalidate>
            @csrf
            <div class="contact-form__field @error('name') contact-form__field--error @enderror">
                <label class="contact-form__label" for="name">Nombre</label>
                <input
                    class="contact-form__input"
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                >
                @error('name')
                    <span class="contact-form__error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="contact-form__field @error('email') contact-form__field--error @enderror">
                <label class="contact-form__label" for="email">Correo</label>
                <input
                    class="contact-form__input"
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >
                @error('email')
                    <span class="contact-form__error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="contact-form__field @error('message') contact-form__field--error @enderror">
                <label class="contact-form__label" for="message">Cuéntanos de tu espacio</label>
                <textarea
                    class="contact-form__textarea"
                    id="message"
                    name="message"
                    rows="4"
                    required
                >{{ old('message') }}</textarea>
                @error('message')
                    <span class="contact-form__error-message">{{ $message }}</span>
                @enderror
            </div>

            <button class="contact-form__submit" type="submit">Enviar mensaje</button>
        </form>
    </div>

    @if (session('status'))
        <div class="notification notification--success notification--enter" role="status" id="contact-notification">
            <span class="notification__icon">✓</span>
            <p class="notification__message">{{ session('status') }}</p>
            <button class="notification__close" type="button" aria-label="Cerrar">×</button>
        </div>
    @endif
</section>
