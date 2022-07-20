<x-layout>
    <section>
        <main class="max-w-lg mx-auto mt-18 p-6 rounded-xl">
            <x-panel>

                <h1 class="text-center font-bold text-xl">Log in!</h1>

                <form action="/login" method="post" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.input name="password" type="password" autocomplete="current-password"/>

                    <x-form.button>Log in</x-form.button>

                </form>

            </x-panel>
        </main>
    </section>    
</x-layout>