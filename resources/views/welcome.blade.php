@extends('layouts.layout')
@section('content')
            {{-- <!-- Pagrindinis puslapis  --> --}}
    <div class="container1">
        <section class="section-home" id="sectio-home">
            <div id="particles-js" class="particles">
                <div class="container">
                    
                </div>
            </div>
        </section>
            {{-- <!-- Paslaugų puslapis --> --}}
        <section class="section-services" id="section-services">
                <div class="over-about-us-text">
                    <h1>Kas jie tokie?</h1>
                    <p>Esame Webarchi, skaitmeninių sprendimų komanda, mes kuriame unikalias internetines svetaines. Teikiame grafinio dizaino paslaugas, bei atliekame internetinių svetainių priežiūrą, koregavimus ir jų atnaujinimus. Stengiamės dirbti pagal naujausias technologijas siekdami užtikrinti aukščiausią kokybę ir rezultatą.
                    </p>
                </div>
                <div class="grid-container-about-us">
                    <div class="grid-item item-1">
                        <div class="service-name">
                            <h3>Programavimas</h3>
                        </div>
                    </div>
                    <div class="grid-item item-2">
                        <div class="service-name">
                            <h3>Testavimas</h3>
                        </div>

                    </div>
                    <div class="grid-item item-3">
                        <div class="service-name">
                            <h3>Svetainių Priežiūra</h3>    
                        </div>
                    </div>
                    <div class="grid-item item-4">
                        <div class="service-name">
                            <h3>UI/UI Dizainas</h3>
                        </div>
                    </div>
                    <div class="grid-item item-5">
                        <div class="service-name">
                            <h3>Marketingas</h3>
                        </div>
                    </div>
        </section>
            {{-- <!-- Projektų puslapis  --> --}}
        <section class="section-project" id="section-projects">
            <div class="over-projects-text">
                <h1>Projektai</h1>
                <h3>Mūsų atlikti darbai klientams</h3>
            </div>
            <div class="grid-container-projects">
                @for($i = 1; $i <8; $i++)
                <div class="grid-item item-{{$i}}">
                    <div class="project-info">
                        <h4>Projektas {{$i}}</h4>
                        <p>Projekto info</p>
                    </div>
                </div>
                @endfor
        </section>    
            {{-- <!-- Kontaktų puslapis  --> --}}
        <section class="section-contacts" id="section-contacts">
            <div class="over-form-text">
                <h1>Susisiek su mumis</h1>
                <h3>Viskas prasideda nuo pokalbio!</h3>
            </div>
                    <form class="rounded msg-form" method="POST" action="/mail">
                    @csrf
                    <div class="form-content">
                        <h2>Parašyk mums</h2>
                        <div class="form-group"> 
                            <div class="name">
                                <div class="input-group">
                                <input type="name" placeholder="Vardas" name="customerName" required = 'true'>
                                </div>
                            </div>    
                        </div>
                        <div class="form-group"> 
                            <div class="email">
                                <div class="input-group">
                                    <input type="email" placeholder="El. paštas" name="customerEmail" required = 'true'>
                                </div>
                            </div>    
                        </div>
                        <div class="form-group"> 
                            <div class="form-phone">
                                <div class="input-group">
                                    <input type="tel" placeholder="Telefono numeris" name="customerPhone" required = 'true'>
                                </div>
                            </div>    
                        </div>
                        <div class="subject">
                            <select placeholder="Subject line" name="customerSubject" required= 'true'>
                                <option disabled hidden selected>Tema</option>
                                <option>Norėčiau pradėti projektą</option>
                                <option>Turiu klausimą</option>
                                <option>Kita</option>
                            </select>
                        </div>
                        <div class="message">
                            <textarea placeholder="Žinutė" id="message_input" cols="30" rows="2" name="customerText" required= 'true'></textarea>
                        </div>
                        <div class="form-group justify-content-start"> 
                            <button class="btn btn-dark"><span> Siųsti <i class="ti-arrow-right"></i></span></button>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required= 'true'>
                            <label class="form-check-label" for="flexCheckDefault">
                                Sutinku su <a href="#" id="ppBtn" class="text-reset"> Privatumo politika.</a>
                            </label>
                        </div>
                    </div>
                        
                    </form>
        {{-- <!-- The Modal --> --}}
        <div id="pp" class="modal-pp">
            {{-- <!-- Modal content --> --}}
            <div class="modal-pp-content">
            <span class="close">&times;</span>
            <p><span class="font-weight-bold">Webarchi.lt </span> privatumo politikoje aprašoma, kokią informaciją renkame ir kaip ją naudojame.</p>
            <h4>1. Kokią informaciją mes renkame?</h4>
            <p>Mes galime rinkti, saugoti ir naudoti žemiau nurodytų rūšių informaciją:
                <br>
                • Informaciją apie Jūsų apsilankymus šioje interneto svetainėje bei naudojimąsi šia interneto svetaine (įskaitant Jūsų IP adresą, geografinę vietą, naršyklės tipą, iš kur buvote nukreiptas, lankymosi trukmę ir puslapių žiūrėjimų skaičių);
                <br>
                • Bet kokią kitą informaciją, kurią Jūs savo pasirinkimu siunčiate mums.
            </p>
            <h4>2. Slapukai</h4>
            <p>Slapuką sudaro informacija, tinklo tarnybinės stoties siunčiama interneto naršyklei ir laikoma naršyklės. Ši informacija vėliau siunčiama atgal tarnybinei stočiai kaskart kai naršyklė paprašo puslapio iš tos tarnybinės stoties. Tai leidžia tai tinklo tarnybinei stočiai identifikuoti ir sekti interneto naršyklę. Dauguma naršyklių leidžia Jums nepriimti jokių slapukų, nors tam tikros naršyklės leidžia Jums nepriimti tik trečiųjų šalių slapukų. Pavyzdžiui, Internet Explorer naršyklėje galite atsisakyti visų slapukų spausdami „Tools“ > „Internet Options“ > „Privacy“ ir pasirinkdami „Block all cookies“ (tai daroma paslenkant perjungiklį). Tačiau visų slapukų blokavimas turės neigiamą įtaką galimybei naudotis daugeliu interneto svetainių, įskaitant šią.
            </p>
            <h4>3. Jūsų asmeninių duomenų naudojimas</h4>
            <p>Asmeniniai duomenys, pateikti šioje interneto svetainėje, bus naudojami tikslams, nurodytiems šioje privatumo politikoje arba aktualiose šios interneto svetainės dalyse. Mes galime naudoti jūsų asmeninę informaciją šiems tikslams:
                <br>
                • Interneto svetainei administruoti;
            <br>
                • Jūsų naršymo patirčiai gerinti, pritaikydami šią interneto svetainę asmeniniams poreikiams;
            <br>
                • turint Jūsų sutikimą siųsti Jums el. paštu mūsų naujienlaiškį, kuris, mūsų manymu, gali būti Jums įdomus (Jūs galite bet kada informuoti mus, jeigu nebenorite, kad naujienlaiškis būtų Jums siunčiamas);
            <br>
                • trečiosioms šalims suteikti statistinę informaciją apie mūsų vartotojus, tačiau ši informacija nebus naudojama jokiam atskiram vartotojui identifikuoti;
            Be aiškaus jūsų sutikimo mes neteiksime jūsų asmeninių duomenų jokioms trečiosioms šalims tiesioginės rinkodaros tikslais.
            </p>
            <h4>4. Politikos pakeitimai</h4>
            <p>Mes galime retkarčiais atnaujinti šią privatumo politiką paskelbdami naują versiją savo interneto svetainėje. Kartkartėmis Jūs turėtumėte peržiūrėti šį puslapį, kad įsitikintumėte, jog esate patenkintas bet kokiais pasikeitimais.
            </p>
            <h4>5. Trečiųjų šalių interneto svetainės</h4>
            <p>Šioje interneto svetainėje yra nuorodų į kitas interneto svetaines. Mes nesame atsakingi už trečiųjų šalių interneto svetainių privatumo politikas ar praktikas
            </p>
            </div>
        </div>  
        </section>
    </div>
@endsection

