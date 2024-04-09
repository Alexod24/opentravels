@extends('layout.sidebar')
@section('title', 'Explorar')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Lugares recomendados</h2>
                <a href="#" class="hidden text-sm font-semibold text-emerald-600 hover:text-emerald-500 sm:block">
                    Lugar aleatorio 
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                <div
                    class="relative group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
                    <img src="https://images.unsplash.com/photo-1509216242873-7786f446f465?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dg"
                        alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
                        class="object-cover object-center group-hover:opacity-75">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 h-full top-0 w-full absolute"></div>
                    <div class="flex items-end p-6 absolute bottom-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Aguas Calientes, Peru
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Visitar ahora</p>
                        </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://images.unsplash.com/photo-1516306580123-e6e52b1b7b5f?q=80&w=2126&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dg"
                        alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Rio de Janeiro, Brazil
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Visitar ahora</p>
                        </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://images.unsplash.com/photo-1624444492054-7f9c54b0a63d?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Cinque Terre, SP, Italia
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Visitar ahora</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-emerald-600 hover:text-emerald-500">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
        <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 sm:pb-24 lg:max-w-7xl lg:px-8">
            <h2 id="products-heading" class="text-2xl font-bold tracking-tight text-gray-900 mb-8">
                Lugares mas visitados</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1501952476817-d7ae22e8ee4e?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Cochem, Alemania</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">1500 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1547448415-e9f5b28e570d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Kremlin, Moscow, Russia</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">302 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1528289504374-36139e80ef6f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Mutianyu Great Wall, China</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">761 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1565555178270-2e4b939b06b4?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Mont-Saint-Michel, Francia</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">105 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img  src="https://images.unsplash.com/photo-1505753065532-68713e211a3d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Guanlan Lake Huayi Feng Xiaogang Film Commune, Haikou, China</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">48 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1547981609-4b6bfe67ca0b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Forbidden City, Beijing, China</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">80 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Meguro River, Matsuno, Japan</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">186 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1526481280693-3bfa7568e0f3?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dg"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Fujiyoshida, Japan</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">190 personas visitaron este lugar</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Agra, India</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">356 personas visitaron este lugar</p>
                </a>
            </div>
        </div>
    </div>
@endsection
