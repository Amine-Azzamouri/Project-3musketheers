<x-form-layout>
    <form action="">
        <div class="form-container flex flex-col sm:justify-center items-center overflow-hidden">
            <h2>Vul hier je gegevens in en kies een pakket!</h2>
            <P>Na het gegevens opsturen krijgt u een email met de betaling gegevens</P>
            <div>
                <input type="text" placeholder="Naam" class="input mt-4">
                <input type="text" placeholder="Achternaam" class="input mt-4">
            </div>
            <input type="email" placeholder="E-mail" class="block mt-1 w-full">
            <input type="text" placeholder="Telefoon Nummer" class="block mt-1 w-full">
            <input type="text" placeholder="Adres" class="block mt-1 w-full">
            <input type="text" placeholder="Pakket 1-2-3" class="block mt-1 w-full">
            <input type="text" placeholder="Surf Locatie" class="block mt-1 w-full">

            <button type="submit" class="buttoncontainer">Verzend!</button>
        </div>
    </form>
</x-form-layout>