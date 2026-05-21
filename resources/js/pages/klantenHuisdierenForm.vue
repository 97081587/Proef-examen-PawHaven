<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import Header from "../layouts/header.vue";

const form = useForm({
    selectedSoort: "",
});
</script>

<template>
    <div
        class="w-full h-screen bg-cover bg-center relative"
        style="background-image: url(&quot;/img/backgroundImage.jpg&quot;)"
    >
        <!--Transparent layer-->
        <div class="absolute inset-0 bg-black/25"></div>

        <!--Content-->
        <div class="relative z-10 h-full flex flex-col text-white">
            <!-- Header -->
            <Header />
            <div class="flex justify-center top-20 relative">
                <div
                    class="absolute z-10 rounded-[41px] border border-white bg-white/20 w-[906px] h-[470px] backdrop-blur-[30px]"
                >
                    <form
                        @submit.prevent="submit"
                        class="flex justify-center flex-row z-40 relative gap-30 mt-7"
                    >
                        <div>
                            <div>
                                <p class="text-white">naam*</p>
                                <input
                                    type="text"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                />
                            </div>
                            <div>
                                <p class="text-white">geboortedatum</p>
                                <input
                                    type="date"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                />
                            </div>
                            <div>
                                <p class="text-white">soort*</p>
                                <select
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                    v-model="form.selectedSoort"
                                >
                                    <option value="">Selecteer soort</option>
                                    <option value="hond">Hond</option>
                                    <option value="kat">Kat</option>
                                    <option value="vis">Vis</option>
                                    <option value="vogel">Vogel</option>
                                    <option value="konijn">Konijn</option>
                                    <option value="hamster">Hamster</option>
                                    <option value="cavia">Cavia</option>
                                    <option value="schildpad">Schildpad</option>
                                    <option value="reptiel">Reptiel</option>
                                    <option value="paard">Paard</option>
                                </select>
                            </div>
                            <div>
                                <p
                                    v-if="form.selectedSoort !== ''"
                                    class="text-white"
                                >
                                    ras*
                                </p>
                                <select
                                    v-if="form.selectedSoort === 'hond'"
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                >
                                    <option value="">Selecteer ras</option>
                                    <option value="affenpinscher">
                                        Affenpinscher
                                    </option>
                                    <option value="afghaanse windhond">
                                        Afghaanse Windhond
                                    </option>
                                    <option value="airedale terrier">
                                        Airedale Terrier
                                    </option>
                                    <option value="akita">Akita</option>
                                    <option value="alaskan malamute">
                                        Alaskan Malamute
                                    </option>
                                    <option value="amerikaanse bulldog">
                                        Amerikaanse Bulldog
                                    </option>
                                    <option value="amerikaanse cocker spaniel">
                                        Amerikaanse Cocker Spaniel
                                    </option>
                                    <option
                                        value="amerikaanse staffordshire terrier"
                                    >
                                        Amerikaanse Staffordshire Terrier
                                    </option>
                                    <option value="anatolische herder">
                                        Anatolische Herder
                                    </option>
                                    <option value="australische herder">
                                        Australische Herder
                                    </option>
                                    <option value="australian cattle dog">
                                        Australian Cattle Dog
                                    </option>
                                    <option value="australian shepherd">
                                        Australian Shepherd
                                    </option>
                                    <option value="basenji">Basenji</option>
                                    <option value="basset hound">
                                        Basset Hound
                                    </option>
                                    <option value="beagle">Beagle</option>
                                    <option value="bearded collie">
                                        Bearded Collie
                                    </option>
                                    <option value="bedlington terrier">
                                        Bedlington Terrier
                                    </option>
                                    <option value="belgische herder">
                                        Belgische Herder
                                    </option>
                                    <option value="bernese mountain dog">
                                        Bernese Mountain Dog
                                    </option>
                                    <option value="bichon frise">
                                        Bichon Frise
                                    </option>
                                    <option value="bloedhond">Bloedhond</option>
                                    <option value="border collie">
                                        Border Collie
                                    </option>
                                    <option value="border terrier">
                                        Border Terrier
                                    </option>
                                    <option value="borzoi">Borzoi</option>
                                    <option value="boston terrier">
                                        Boston Terrier
                                    </option>
                                    <option value="boxer">Boxer</option>
                                    <option value="bracco italiano">
                                        Bracco Italiano
                                    </option>
                                    <option value="briard">Briard</option>
                                    <option value="britse bulldog">
                                        Britse Bulldog
                                    </option>
                                    <option value="bull terrier">
                                        Bull Terrier
                                    </option>
                                    <option value="bullmastiff">
                                        Bullmastiff
                                    </option>
                                    <option value="bulldog">Bulldog</option>
                                    <option value="cairn terrier">
                                        Cairn Terrier
                                    </option>
                                    <option value="cane corso">
                                        Cane Corso
                                    </option>
                                    <option
                                        value="cavalier king charles spaniel"
                                    >
                                        Cavalier King Charles Spaniel
                                    </option>
                                    <option value="chesapeake bay retriever">
                                        Chesapeake Bay Retriever
                                    </option>
                                    <option value="chihuahua">Chihuahua</option>
                                    <option value="chinese naakthond">
                                        Chinese Naakthond
                                    </option>
                                    <option value="chow chow">Chow Chow</option>
                                    <option value="clumber spaniel">
                                        Clumber Spaniel
                                    </option>
                                    <option value="cockapoo">Cockapoo</option>
                                    <option value="cocker spaniel">
                                        Cocker Spaniel
                                    </option>
                                    <option value="collie">Collie</option>
                                    <option value="corgi">Corgi</option>
                                    <option value="dalmatiër">Dalmatiër</option>
                                    <option value="dandie dinmont terrier">
                                        Dandie Dinmont Terrier
                                    </option>
                                    <option value="dashond">Dashond</option>
                                    <option value="dogo argentino">
                                        Dogo Argentino
                                    </option>
                                    <option value="dobermann">Dobermann</option>
                                    <option value="duitse dog">
                                        Duitse Dog
                                    </option>
                                    <option value="duitse herder">
                                        Duitse Herder
                                    </option>
                                    <option value="engelse bulldog">
                                        Engelse Bulldog
                                    </option>
                                    <option value="engelse cocker spaniel">
                                        Engelse Cocker Spaniel
                                    </option>
                                    <option value="engelse setter">
                                        Engelse Setter
                                    </option>
                                    <option value="engelse springer spaniel">
                                        Engelse Springer Spaniel
                                    </option>
                                    <option value="flatcoated retriever">
                                        Flatcoated Retriever
                                    </option>
                                    <option value="fox terrier">
                                        Fox Terrier
                                    </option>
                                    <option value="franse bulldog">
                                        Franse Bulldog
                                    </option>
                                    <option value="golden retriever">
                                        Golden Retriever
                                    </option>
                                    <option value="gordon setter">
                                        Gordon Setter
                                    </option>
                                    <option value="greyhound">Greyhound</option>
                                    <option value="havanezer">Havanezer</option>
                                    <option value="husky">Husky</option>
                                    <option value="ierse setter">
                                        Ierse Setter
                                    </option>
                                    <option value="ierse wolfshond">
                                        Ierse Wolfshond
                                    </option>
                                    <option value="jack russell terrier">
                                        Jack Russell Terrier
                                    </option>
                                    <option value="keeshond">Keeshond</option>
                                    <option value="komondor">Komondor</option>
                                    <option value="kooikerhondje">
                                        Kooikerhondje
                                    </option>
                                    <option value="labradoodle">
                                        Labradoodle
                                    </option>
                                    <option value="labrador">Labrador</option>
                                    <option value="lagotto romagnolo">
                                        Lagotto Romagnolo
                                    </option>
                                    <option value="landseer">Landseer</option>
                                    <option value="leonberger">
                                        Leonberger
                                    </option>
                                    <option value="lhasa apso">
                                        Lhasa Apso
                                    </option>
                                    <option value="malamute">Malamute</option>
                                    <option value="maltezer">Maltezer</option>
                                    <option value="mastiff">Mastiff</option>
                                    <option value="miniature schnauzer">
                                        Miniature Schnauzer
                                    </option>
                                    <option value="newfoundlander">
                                        Newfoundlander
                                    </option>
                                    <option value="norfolk terrier">
                                        Norfolk Terrier
                                    </option>
                                    <option value="norwich terrier">
                                        Norwich Terrier
                                    </option>
                                    <option value="old english sheepdog">
                                        Old English Sheepdog
                                    </option>
                                    <option value="papillon">Papillon</option>
                                    <option value="pekingees">Pekingees</option>
                                    <option value="pitbull">Pitbull</option>
                                    <option value="pointer">Pointer</option>
                                    <option value="poedel">Poedel</option>
                                    <option value="pomeriaan">Pomeriaan</option>
                                    <option value="pomeranian">
                                        Pomeranian
                                    </option>
                                    <option value="portugese waterhond">
                                        Portugese Waterhond
                                    </option>
                                    <option value="pug">Pug</option>
                                    <option value="puli">Puli</option>
                                    <option value="rhodesian ridgeback">
                                        Rhodesian Ridgeback
                                    </option>
                                    <option value="rottweiler">
                                        Rottweiler
                                    </option>
                                    <option value="saint bernard">
                                        Saint Bernard
                                    </option>
                                    <option value="saluki">Saluki</option>
                                    <option value="samoyed">Samoyed</option>
                                    <option value="schipperke">
                                        Schipperke
                                    </option>
                                    <option value="schnauzer">Schnauzer</option>
                                    <option value="scottish terrier">
                                        Scottish Terrier
                                    </option>
                                    <option value="shar pei">Shar Pei</option>
                                    <option value="shiba inu">Shiba Inu</option>
                                    <option value="shih tzu">Shih Tzu</option>
                                    <option value="siberische husky">
                                        Siberische Husky
                                    </option>
                                    <option value="sint bernard">
                                        Sint Bernard
                                    </option>
                                    <option value="skye terrier">
                                        Skye Terrier
                                    </option>
                                    <option value="staffordshire bull terrier">
                                        Staffordshire Bull Terrier
                                    </option>
                                    <option value="toy poedel">
                                        Toy Poedel
                                    </option>
                                    <option value="vizsla">Vizsla</option>
                                    <option value="weimaraner">
                                        Weimaraner
                                    </option>
                                    <option value="welsh corgi">
                                        Welsh Corgi
                                    </option>
                                    <option value="west highland white terrier">
                                        West Highland White Terrier
                                    </option>
                                    <option value="whippet">Whippet</option>
                                    <option value="yorkshire terrier">
                                        Yorkshire Terrier
                                    </option>
                                    <option value="zwitserse witte herder">
                                        Zwitserse Witte Herder
                                    </option>
                                </select>
                                <select
                                    v-else-if="form.selectedSoort === 'kat'"
                                    type="dropdown"
                                    class="rounded-full bg-white w-full px-4 py-2 text-black"
                                >
                                    <option value="">Selecteer ras</option>
                                    <option value="abyssijn">Abyssijn</option>
                                    <option value="american bobtail">
                                        American Bobtail
                                    </option>
                                    <option value="american curl">
                                        American Curl
                                    </option>
                                    <option value="american shorthair">
                                        American Shorthair
                                    </option>
                                    <option value="american wirehair">
                                        American Wirehair
                                    </option>
                                    <option value="balinees">Balinees</option>
                                    <option value="bengaal">Bengaal</option>
                                    <option value="birmaan">Birmaan</option>
                                    <option value="bombay">Bombay</option>
                                    <option value="britse korthaar">
                                        Britse Korthaar
                                    </option>
                                    <option value="britse langhaar">
                                        Britse Langhaar
                                    </option>
                                    <option value="burmees">Burmees</option>
                                    <option value="chartreux">Chartreux</option>
                                    <option value="chausie">Chausie</option>
                                    <option value="cornish rex">
                                        Cornish Rex
                                    </option>
                                    <option value="cyprus kat">
                                        Cyprus Kat
                                    </option>
                                    <option value="devon rex">Devon Rex</option>
                                    <option value="don sphynx">
                                        Don Sphynx
                                    </option>
                                    <option value="egyptische mau">
                                        Egyptische Mau
                                    </option>
                                    <option value="europese korthaar">
                                        Europese Korthaar
                                    </option>
                                    <option value="exotic shorthair">
                                        Exotic Shorthair
                                    </option>
                                    <option value="havana brown">
                                        Havana Brown
                                    </option>
                                    <option value="highlander">
                                        Highlander
                                    </option>
                                    <option value="himalayan">Himalayan</option>
                                    <option value="japanse bobtail">
                                        Japanse Bobtail
                                    </option>
                                    <option value="khao manee">
                                        Khao Manee
                                    </option>
                                    <option value="korat">Korat</option>
                                    <option value="laperm">LaPerm</option>
                                    <option value="lykoi">Lykoi</option>
                                    <option value="maine coon">
                                        Maine Coon
                                    </option>
                                    <option value="manx">Manx</option>
                                    <option value="munchkin">Munchkin</option>
                                    <option value="nebelung">Nebelung</option>
                                    <option value="noorse boskat">
                                        Noorse Boskat
                                    </option>
                                    <option value="ocicat">Ocicat</option>
                                    <option value="oosters korthaar">
                                        Oosters Korthaar
                                    </option>
                                    <option value="oosters langhaar">
                                        Oosters Langhaar
                                    </option>
                                    <option value="pers">Pers</option>
                                    <option value="peterbald">Peterbald</option>
                                    <option value="pixiebob">Pixiebob</option>
                                    <option value="ragamuffin">
                                        Ragamuffin
                                    </option>
                                    <option value="ragdoll">Ragdoll</option>
                                    <option value="russisch blauw">
                                        Russisch Blauw
                                    </option>
                                    <option value="savannah">Savannah</option>
                                    <option value="scottish fold">
                                        Scottish Fold
                                    </option>
                                    <option value="selkirk rex">
                                        Selkirk Rex
                                    </option>
                                    <option value="siamees">Siamees</option>
                                    <option value="siberische kat">
                                        Siberische Kat
                                    </option>
                                    <option value="singapura">Singapura</option>
                                    <option value="snowshoe">Snowshoe</option>
                                    <option value="somali">Somali</option>
                                    <option value="sphynx">Sphynx</option>
                                    <option value="thaise kat">
                                        Thaise Kat
                                    </option>
                                    <option value="tiffany">Tiffany</option>
                                    <option value="tonkinees">Tonkinees</option>
                                    <option value="toyger">Toyger</option>
                                    <option value="turkse angora">
                                        Turkse Angora
                                    </option>
                                    <option value="turkse van">
                                        Turkse Van
                                    </option>
                                    <option value="ural rex">Ural Rex</option>
                                    <option value="york chocolate">
                                        York Chocolate
                                    </option>
                                    <option value="huiskat">Huiskat</option>
                                    <option value="langharige huiskat">
                                        Langharige Huiskat
                                    </option>
                                    <option value="kortharige huiskat">
                                        Kortharige Huiskat
                                    </option>
                                    <option value="gemengde kat">
                                        Gemengde Kat
                                    </option>
                                </select>
                            </div>
                            <div class="mt-5">
                                <a
                                    href="/huisdieren"
                                    class="text-black opacity-[0.54]"
                                    tabindex="-1"
                                >
                                    annuleren
                                </a>
                            </div>
                        </div>
                        <div>
                            <img
                                src="C:\Users\oscar\OneDrive - Deltion College\Github\Proef-examen-PawHaven\proef-examen-pawhaven\public\img\bananaCat.png"
                                alt="banana peel placed on top of a cat's head (banana cat)"
                                class="w-[175px] h-[175px] rounded-full object-cover border-2 border-white"
                            />
                            <button
                                type="submit"
                                class="mt-10 w-[300px] h-[120px] rounded-[41px] border border-solid border-white bg-white/20 text-white text-[25px] hover:scale-105 transition-transform duration-300"
                            >
                                Voeg huisdier toe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
