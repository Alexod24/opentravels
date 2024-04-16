@extends('layout.template')
@section('title', 'Inicio')

@section('content')
<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">OpenTravels</span>
        <img class="h-8 w-auto" src="{{ asset('assets/logo.png') }}" alt="OpenTravels">
      </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Características</a>
      <a href="#contact" class="text-sm font-semibold leading-6 text-gray-900">Contactanos</a>
      <a href="#faq" class="text-sm font-semibold leading-6 text-gray-900">Preguntas</a>
      <a href="https://paypal.me/yerikah" target="_blank" class="text-sm font-semibold leading-6 text-gray-900">Donar</a>
    </div>
    <div class="flex flex-1 items-center justify-end gap-x-6">
      <a href="/register" class="hidden lg:block lg:text-sm lg:font-semibold lg:leading-6 lg:text-gray-900">Registrarse</a>
      <a href="/login" class="rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Iniciar sesion</a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="buttonOpenMenu">
        <span class="sr-only">Abrir menú principal</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
  </nav>
  <div class="hidden" role="dialog" aria-modal="true" id="menuMobile">
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center gap-x-6">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">OpenTravels</span>
          <img class="h-8 w-auto" src="{{ asset('assets/logo.png') }}" alt="OpenTravels">
        </a>
        <a href="/login" class="ml-auto rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Ingresar
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="buttonCloseMenu">
          <span class="sr-only">Cerrar menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <a href="#features" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Características</a>
            <a href="#contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contactanos</a>
            <a href="#faq" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Preguntas</a>
            <a href="https://paypal.me/yerikah"  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Donar</a>
          </div>
          <div class="py-6">
            <a href="/register" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Registrarse</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<main>



  <section class="relative bg-white">
    <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
      <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <div class="hidden sm:mt-32 sm:flex lg:mt-16">
            <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              Prueba nuestra aplicación, <a href="#" class="whitespace-nowrap font-semibold text-emerald-600"><span class="absolute inset-0" aria-hidden="true"></span>¡es completamente gratis! <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
          <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">Datos para hacer tu turismo mas facil</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Encuentra aquí toda la información que necesitas para planificar tu próximo viaje de manera sencilla y conveniente.</p>
          <div class="mt-10 flex items-center gap-x-6">
            <a href="#" class="rounded-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Empezar con tu aventura
            </a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Ver características <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
        <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full" src="https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2102&q=80" alt="">
      </div>
    </div>
</section>

  <section class="bg-white py-24 sm:py-32" >
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Con la confianza de los más importantes del mundo
        equipos innovadores</h2>
      <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
      </div>
    </div>
</section>

  <section class="overflow-hidden bg-white py-24 sm:py-32" id="features">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-emerald-600">Lugares increíbles</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Todo en nuestra aplicación
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Con nuestra aplicación podrás guardar sus lugares turísticos favoritos, podrás guardar fotos y poder impresionar a todo el mundo con las fotografías de los paisajes que tomaste.</p>
            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <svg class="absolute left-1 top-1 h-5 w-5 text-emerald-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                  </svg>
                  Publicar lugares:
                </dt>
                <dd class="inline">Podrás publicar los lugares que visitaste y compartir con todo el mundo tus preferencias.</dd>
              </div>
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <svg class="absolute left-1 top-1 h-5 w-5 text-emerald-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                  </svg>
                  Integrar fotografías:
                </dt>
                <dd class="inline">No solo podrás dar una descripción y una calificación a un lugar, también podrás integrar fotografías. </dd>
              </div>
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <svg class="absolute left-1 top-1 h-5 w-5 text-emerald-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                    <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                  </svg>
                  Explora otro lugares:
                </dt>
                <dd class="inline">Podrás ver todos los lugares de todo el mundo de otra persona.</dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="flex items-start justify-end lg:order-first">
          <img src="{{ asset('assets/desktop_app.png') }}" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
        </div>
      </div>
    </div>
</section>



  <section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">La aplicación de tus sueños, es gratis</h2>
        <p class="mt-6 text-base leading-7 text-gray-600">¿Te imaginas tener la aplicación perfecta, diseñada a medida para tus necesidades, sin tener que pagar ni un centavo? ¡Es posible! Nuestra plataforma te ofrece la oportunidad de crear la aplicación de tus sueños de forma gratuita. ¡Aprovecha esta oportunidad y haz una reseña hoy mismo!</p>
      </div>
      <div class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
        <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
          <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">Instagram de lugares</p>
          <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
            <p class="text-lg font-semibold tracking-tight text-gray-900">¿Reseñas de lugares de una manera simple?</p>
            <p class="mt-2 text-base leading-7 text-gray-600"> Simplicidad en las reseñas de lugares: nuestra solución hace que compartir experiencias sea fácil y sin complicaciones. ¡Descúbrelo ahora!</p>
          </div>
        </div>
        <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
          <p class="flex-none text-3xl font-bold tracking-tight text-white">Millones de personas probarán OpenTravels</p>
          <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
            <p class="text-lg font-semibold tracking-tight text-white">¿Qué esperas para probarlo tú?</p>
            <p class="mt-2 text-base leading-7 text-gray-400"> Únete a OpenTravels y comienza a compartir tus experiencias en tus lugares favoritos de manera fácil y gratuita.</p>
          </div>
        </div>
        <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-emerald-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
          <p class="flex-none text-3xl font-bold tracking-tight text-white">Tu aplicación única de lugares</p>
          <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
            <p class="text-lg font-semibold tracking-tight text-white">OpenTravels, el proyecto de código abierto, gratuito, que te permitirá subir reseñas a tus lugares favoritos.</p>
            <p class="mt-2 text-base leading-7 text-emerald-200">Descubre OpenTravels: la plataforma de código abierto y gratuita que facilita compartir tus experiencias en tus lugares favoritos. Únete ahora y comparte tus reseñas con el mundo."
            </p>
          </div>
        </div>
      </div>
    </div>
</section>






  <section class="bg-white py-24 sm:py-32" id="contact">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl space-y-16 divide-y divide-gray-100 lg:mx-0 lg:max-w-none">
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Ponerse en contacto</h2>
            <p class="mt-4 leading-7 text-gray-600">
              Mejoras o sugerencias para nuestra aplicación, todo es bienvenido, nuestro de grupo de desarrolladores se pondrán a trabajar en ello y podrás tener una aplicación a tu medida.</p>
          </div>
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Collaborate</h3>
              <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd><a class="font-semibold text-emerald-600" href="mailto:collaborate@example.com">collaborate@example.com</a></dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 905-2345</dd>
                </div>
              </dl>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Press</h3>
              <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd><a class="font-semibold text-emerald-600" href="mailto:press@example.com">press@example.com</a></dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 905-3456</dd>
                </div>
              </dl>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Join our team</h3>
              <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd><a class="font-semibold text-emerald-600" href="mailto:careers@example.com">careers@example.com</a></dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 905-4567</dd>
                </div>
              </dl>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Say hello</h3>
              <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd><a class="font-semibold text-emerald-600" href="mailto:hello@example.com">hello@example.com</a></dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 905-5678</dd>
                </div>
              </dl>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 pt-16 lg:grid-cols-3">
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Descubre Locaciones Recomendadas por Otros Turistas:</h2>
            <p class="mt-4 leading-7 text-gray-600">Explora una lista de locaciones recomendadas por otros turistas que han visitado [Nombre de la Ciudad]. .</p>
          </div>
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Los Angeles</h3>
              <address class="mt-3 space-y-1 text-sm not-italic leading-6 text-gray-600">
                <p>4556 Brendan Ferry</p>
                <p>Los Angeles, CA 90210</p>
              </address>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">New York</h3>
              <address class="mt-3 space-y-1 text-sm not-italic leading-6 text-gray-600">
                <p>886 Walter Street</p>
                <p>New York, NY 12345</p>
              </address>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Toronto</h3>
              <address class="mt-3 space-y-1 text-sm not-italic leading-6 text-gray-600">
                <p>7363 Cynthia Pass</p>
                <p>Toronto, ON N3Y 4H8</p>
              </address>
            </div>
            <div class="rounded-2xl bg-gray-50 p-10">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Chicago</h3>
              <address class="mt-3 space-y-1 text-sm not-italic leading-6 text-gray-600">
                <p>726 Mavis Island</p>
                <p>Chicago, IL 60601</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  <section class="bg-white" id="faq">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
      <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Preguntas frecuentes</h2>
      <p class="mt-6 max-w-2xl text-base leading-7 text-gray-600">¿Tienes una pregunta diferente y no encuentras la respuesta que buscas? <a href="#" class="font-semibold text-emerald-600 hover:text-emerald-500">sending us an email</a> Comuníquese con nuestro equipo de soporte enviándonos un correo electrónico y nos comunicaremos con usted lo antes posible.</p>
      <div class="mt-20">
        <dl class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:gap-x-10">
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900">¿Cómo puedo registrarme en OpenTravels?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Para registrarte en OpenTravels, simplemente ve a la página de inicio y haz clic en el botón "Registrarse". Luego, sigue las instrucciones para completar el formulario de registro con tu nombre de usuario, contraseña y cualquier otra información requerida.</dd>
          </div>
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900">¿Qué puedo hacer una vez que me haya registrado en OpenTravels?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Una vez registrado en OpenTravels, puedes comenzar a compartir tus experiencias de viaje. Agrega los lugares que has visitado a tu perfil, incluyendo fotos, descripciones y comentarios sobre tus experiencias. Además, puedes explorar los lugares que otros usuarios han visitado y encontrar inspiración para tus próximos viajes.</dd>
          </div>
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900">¿Puedo utilizar OpenTravels en dispositivos móviles?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Sí, OpenTravels está diseñado para ser compatible con dispositivos móviles. Puedes acceder a la aplicación a través de tu navegador web en tu teléfono inteligente o tableta, lo que te permite compartir tus viajes y explorar nuevos lugares sobre la marcha.</dd>
          </div>
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900"> ¿Es OpenTravels gratuito?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Sí, OpenTravels es completamente gratuito para todos los usuarios. No se requiere ningún pago ni suscripción para utilizar todas las funciones de la aplicación.</dd>
          </div>
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900">¿Puedo ver los lugares que han visitado mis amigos en OpenTravels?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Sí, puedes conectar con amigos en OpenTravels y ver los lugares que han visitado. Además, puedes seguir a otros usuarios cuyas experiencias de viaje te interesen y ver sus perfiles para descubrir nuevos destinos.</dd>
          </div>
          <div>
            <dt class="text-base font-semibold leading-7 text-gray-900">¿Cómo puedo compartir mis experiencias de viaje en OpenTravels?</dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Para compartir tus experiencias de viaje en OpenTravels, simplemente inicia sesión en tu cuenta y navega hasta la sección de "Agregar lugar". Completa la información solicitada, como el nombre del lugar, la ubicación, las fechas de visita, y agrega fotos y comentarios opcionales para enriquecer tu entrada. Una vez que hayas guardado la información, otros usuarios podrán ver y comentar tus publicaciones.</dd>
          </div>

        </dl>
      </div>
    </div>
</section>

  <section class="bg-white">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
      <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
        <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">¡Descubre OpenTravels y Mejora tu Experiencia de Viaje!</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">¡Es gratis! ¡Te garantizamos que tu viaje será más emocionante, más fácil y más memorable con nosotros!</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Iniciar aventura
          </a>

        </div>
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.9" />
          <defs>
            <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
              <stop stop-color="#32cd8a" />
              <stop offset="1" stop-color="#32cd8a" />
            </radialGradient>
          </defs>
        </svg>
      </div>
    </div>
</section>
</main>

<footer class="bg-gray-900" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="space-y-8">
        <img class="h-10" src="{{ asset('assets/logo.png') }}" alt="OpenTravels">
        <p class="text-sm leading-6 text-gray-300">Making the world a better place through constructing elegant
          hierarchies.</p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-500 hover:text-gray-400">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-400">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-400">
            <span class="sr-only">X</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-400">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-400">
            <span class="sr-only">YouTube</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">Solutions</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Marketing</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Analytics</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Commerce</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Insights</a>
              </li>
            </ul>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-white">Support</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Pricing</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Documentation</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Guides</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">API
                  Status</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">Company</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">About</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Blog</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Jobs</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Press</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Partners</a>
              </li>
            </ul>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Claim</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Privacy</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
      <p class="text-xs leading-5 text-gray-400">© [OpenTravels] - Todos los derechos reservados. [Año]. Privacidad | Términos y Condiciones | Política de Cookies</p>
    </div>
  </div>
</footer>
@endsection
