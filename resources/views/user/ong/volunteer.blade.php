<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntários</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-white overflow-x-hidden">

    <!--navbar-->
    <header class="bg-white">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="/ong/account" class="text-customBlue  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Meus Dados</a>
                <a href="/ong/mural" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3 ">Cursos</a>
                <a href="/ong/volunteer" class="text-customRed  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Voluntários</a>
                <a href="/courses" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3 ">Matriculas</a>


            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="#" class="text-gray-600 hover:text-customRed ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="/ong/account" class="block text-customBlue  text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="/ong/mural" class="text-customBlue  text-lg font-itim hover:text-customRed  ">Mural</a>
            <a href="/ong/courses" class="block text-customBlue  text-lg font-itim py-2 hover:text-customRed ">Cursos</a>
            <a href="/ong/volunteer" class="block text-customRed  text-lg font-itim py-2 hover:text-customRed">Voluntarios</a>
            <a href="#" class="text-customBlue  text-lg font-itim hover:text-customRed  "></a>
        </div>
    </header>
    <!--fim da navbar-->


    <div class="w-full bg-customRed h-40 relative">
        <!-- img no canto inferior direito -->
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 mb-4 mr-4" width="24.000000pt" height="24.000000pt" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                <path d="M393 488 c-137 -139 -152 -157 -161 -200 -12 -60 -4 -68 56 -56 43 9 61 24 200 161 83 84 152 159 152 167 0 20 -61 80 -81 80 -8 0 -82 -69 -166 -152z m192 92 c14 -16 16 -23 7 -32 -10 -10 -17 -7 -33 9 -12 11 -18 26 -15 32 10 16 21 14 41 -9z m-153 -192 c-78 -78 -126 -118 -140 -118 -48 0 -24 41 95 162 l117 118 23 -22 24 -23 -119 -117z" />
                <path d="M25 516 l-25 -25 0 -224 c0 -293 -26 -267 269 -267 l222 0 25 25 c24 24 24 26 22 177 -3 135 -5 153 -20 156 -16 3 -18 -11 -20 -155 l-3 -158 -225 0 -225 0 0 225 0 225 158 3 c144 2 158 4 155 20 -3 15 -21 17 -156 20 -151 2 -153 2 -177 -22z" />
            </g>
        </svg>
        <!--imagem e nome da ong-->
        <div class="max-w-5xl mx-auto h-full flex items-center relative">
            <div class="absolute left-0 bottom-0 transform translate-y-1/2 ml-4">
                <div class="bg-white p-2 rounded-full border-2 border-black overflow-hidden">
                    <img src="{{ asset('images/image-gallery.png') }}" width="110" height="110" class="object-cover py-4 px-4" alt="Imagem">
                </div>
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 mb-1 mr-0.5" width="20.000000pt" height="20.000000pt" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#E15C5C" stroke="none">
                        <path d="M393 488 c-137 -139 -152 -157 -161 -200 -12 -60 -4 -68 56 -56 43 9 61 24 200 161 83 84 152 159 152 167 0 20 -61 80 -81 80 -8 0 -82 -69 -166 -152z m192 92 c14 -16 16 -23 7 -32 -10 -10 -17 -7 -33 9 -12 11 -18 26 -15 32 10 16 21 14 41 -9z m-153 -192 c-78 -78 -126 -118 -140 -118 -48 0 -24 41 95 162 l117 118 23 -22 24 -23 -119 -117z" />
                        <path d="M25 516 l-25 -25 0 -224 c0 -293 -26 -267 269 -267 l222 0 25 25 c24 24 24 26 22 177 -3 135 -5 153 -20 156 -16 3 -18 -11 -20 -155 l-3 -158 -225 0 -225 0 0 225 0 225 158 3 c144 2 158 4 155 20 -3 15 -21 17 -156 20 -151 2 -153 2 -177 -22z" />
                    </g>
                </svg>
            </div>
            <div class="absolute left-36 bottom-0 transform translate-y-3/4 py-6 px-4">
                <label class="text-3xl font-bold text-black">Nome da ONG</label>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="w-full max-w-5xl rounded-xl bg-gray-100 py-6 px-4 sm:px-8 items-center justify-center mt-20">
            <form action="/createvolunteer" method="post">
                @csrf
                <div class="flex flex-col">
                    <div class="w-full flex flex-col h-full">
                        <h1 class="text-lg font-bold text-black flex justify-center items-center">Adicionar</h1> <!--Título-->
                        <!--primeira parte do formulário-->
                        <div class="flex flex-col md:flex-row justify-between mt-6 space-y-4 md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-1/4">
                                <label for="name-ar" class="text-black">Nome da área</label>
                                <input id="name-ar" type="text" name="name-ar" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>
                            <div class="w-full md:w-1/4">
                                <label for="tel-cont" class="text-black">Telefone para contato</label>
                                <input id="tel-cont" type="text" name="tel-cont" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>
                            <div class="w-full md:w-1/4">
                                <label for="email" class="text-black">E-mail para contato</label>
                                <input id="email" type="text" name="email" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>
                            <div class="w-full md:w-1/4">
                                <label for="cidade" class="text-black">Cidade</label>
                                <input id="cidade" type="text" name="cidade" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>
                        </div>
                        <!--segunda parte do formulário-->
                        <div class="flex flex-col md:flex-row justify-between mt-4 space-y-4 md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-2/3">
                                <label for="voluntarios" class="text-black">Voluntários desejados</label>
                                <textarea id="voluntarios" name="voluntarios" placeholder="Descreva o motivo pela procura de voluntários e os requisitos a serem atendidos " class="mt-1 block w-full resize-none border-4 border-customRed rounded-xl px-6 py-3"></textarea>
                            </div>
                            <div class="w-full md:w-1/3 flex md:flex-row flex-col gap-4">
                                <div class="flex flex-col flex-1">
                                    <label for="day" class="text-black">Dias da semana</label>
                                    <input id="day" type="text" name="day" placeholder="Ex: Segunda a sexta" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                                </div>
                                <div class="flex flex-col flex-1">
                                    <label for="hour" class="text-black">Horário</label>
                                    <input id="hour" type="text" name="hour" placeholder="Ex: 13h às 14h" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                                </div>
                            </div>
                        </div>
                        <!--botão de criação-->
                        <div class="flex place-content-end mt-4">
                            <button class="bg-red-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-red-900">Criar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--card de exibição da necessidade-->
    <div class="flex items-center justify-center">
        <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10 items-center justify-center mt-4">
            <div class="flex flex-col">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                    <div class="flex items-center">
                        <label class="text-black mr-1">ONG:</label>
                        <label class="text-red-500 font-bold">Crescer Sabendo</label><!--adicionar back-end-->
                    </div>
                    <div class="flex flex-col items-start sm:items-end mt-4 sm:mt-0">
                        <label>Tel: (11) 99999-9999</label>
                        <label>E-mail: xxxx@gmail.com</label>
                    </div>
                </div>
                <!-- Linhas horizontais -->
                <div class="my-4">
                    <hr class="border-2 border-gray-400">
                </div>

                <div class="flex flex-col justify-between">
                    <h1 class="text-lg font-bold text-indigo-900 flex justify-center items-center">Necessidade: Professor de música</h1><!--adicionar back-end-->
                    <p class="text-justify text-lg w-full my-4">Procuramos professores de música com experiência em ensino e domínio de pelo menos um instrumento musical.<!--adicionar back-end-->
                        Os candidatos devem ser comprometidos, pacientes e ter disponibilidade para ministrar aulas semanais.
                        Além disso, buscamos pessoas que tenham sensibilidade para trabalhar em comunidades carentes, com o desejo
                        de fazer a diferença na vida dos alunos por meio da arte.</p>
                </div>
                <!-- Seção de localização, horário e botões -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center mt-4 sm:justify-end">
                    <!-- Container para localização, que vai para a esquerda -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:mr-8">
                        <label class="flex mb-4 sm:mb-0 items-center text-left">
                            <svg class="mr-2" version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M59 211 c-17 -18 -29 -40 -29 -56 0 -30 28 -86 65 -130 l25 -30 25 30 c37 44 65 100 65 130 0 38 -50 85 -90 85 -22 0 -41 -9 -61 -29z m91 -36 c15 -18 10 -45 -12 -59 -35 -22 -74 27 -48 59 16 19 44 19 60 0z" />
                                </g>
                            </svg>
                            São Paulo</label>
                    </div>

                    <!-- Container para horário e botões, que vai para a direita -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center sm:ml-auto">
                        <label class="flex mb-4 mr-6 sm:mb-0 items-center text-left sm:ml-8">
                            <svg class="mr-2 mt-2" version="1.0" xmlns="http://www.w3.org/2000/svg" width="28.000000pt" height="28.000000pt" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M77 614 c-4 -4 -7 -18 -7 -30 0 -16 -7 -24 -22 -26 -19 -2 -24 -10 -26 -40 l-3 -38 260 0 261 0 0 35 c0 19 -6 38 -14 42 -8 4 -16 19 -18 33 -4 34 -32 32 -36 -2 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 27 -3 26 -18 39 -31 27z" />
                                    <path d="M22 273 l3 -168 141 -3 142 -3 -5 44 c-3 27 1 57 11 81 15 36 15 40 0 51 -24 17 -8 35 30 35 19 0 51 7 72 16 24 10 54 14 81 11 l43 -5 0 54 0 54 -260 0 -260 0 2 -167z m138 113 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m-305 -96 c0 -18 -33 -26 -47 -12 -6 6 -7 15 -3 22 10 16 50 8 50 -10z m100 0 c0 -18 -33 -26 -47 -12 -6 6 -7 15 -3 22 10 16 50 8 50 -10z m-106 -79 c19 -12 4 -31 -25 -31 -35 0 -30 34 6 39 3 0 11 -3 19 -8z m95 3 c28 -11 18 -34 -14 -34 -30 0 -43 23 -17 33 6 3 13 6 14 6 1 1 8 -2 17 -5z" />
                                    <path d="M412 280 c-70 -43 -92 -128 -49 -191 62 -93 189 -87 239 12 23 45 23 86 -2 127 -42 68 -124 91 -188 52z m86 -81 c2 -19 13 -44 25 -57 16 -17 18 -25 9 -34 -21 -21 -72 38 -72 82 0 61 33 69 38 9z" />
                                </g>
                            </svg>
                            Horário 13h às 17h - Segunda a sexta</label>
                    </div>
                    <!-- Botões do crud -->
                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 sm:ml-4 self-center">
                        <button class="bg-blue-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-blue-900">Editar</button>
                        <button class="bg-red-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-red-900">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>