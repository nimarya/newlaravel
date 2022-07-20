<x-layout>
    <section>
        <main class="max-w-lg mx-auto mt-18 p-6 rounded-xl">
            <x-panel>

                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form action="/register" method="post" class="mt-10">
                    @csrf
                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>

                    <x-form.button>Submit</x-form.button>

                </form>

            </x-panel>
        </main>
    </section>    
</x-layout>