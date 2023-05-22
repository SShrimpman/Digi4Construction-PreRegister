<div class="md:flex items-center">
    <div class="lg:mt-5 w-800 lg:rounded-t-2xl">
            <div class="flex justify-center">
                <h1 class="text-white text-4xl p-5 lg:text-5xl font-bold font-betatron tracking-widest">
                    Digi<span id="glow">4</span>Construction
                </h1>
            </div>
        @if ($errors->any())
            <div class="flex flex-col gap-2 justify-center lg:absolute lg:top-0 lg:right-0 lg:mt-5 lg:mr-5">
                @foreach ($errors->all() as $error)
                <div class="flex justify-center cursor-pointer select-none" onclick="this.remove()">
                    <div class="bg-white w-64 p-2 lg:w-80 border rounded-md shadow-lg opacity-80 dark:bg-red-900 dark:border-red-800" role="alert">
                            <div class="ml-3">
                                <p class="text-sm text-white lg:text-lg">
                                    {{ $error }}
                                </p>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        <form name="form" id="form" method="POST" action="{{ url('store') }}" class="w-800 h-full rounded-b-2xl">
            @csrf
            <div class="flex justify-center mt-5 mb-5">
                <h3 class="flex justify-center font-bold font-betatron text-xl tracking-widest">Junte-se a nós!</h3>
            </div>
            <div class="flex justify-center">
                <div class="grid grid-cols-1 mb-5 mt-5 gap-5 md:w-96">
                    <div class="relative w-full min-w-[200px]">
                        <input type="text" id="name" name="name" id="placeholder-text"
                        class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-1 focus:border-lightBlue focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" "
                        >
                        <label  for="Name" class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-lightBlue peer-focus:before:border-t-1 peer-focus:before:border-l-1 peer-focus:before:border-lightBlue peer-focus:after:border-t-1 peer-focus:after:border-r-1 peer-focus:after:border-lightBlue peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Nome
                        </label>
                    </div>
                    <div class="relative w-full min-w-[200px]">
                        <input type="email" id="email" name="email" id="placeholder-text"
                        class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-1 focus:border-lightBlue focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" "
                        >
                        <label for="Email" class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-lightBlue peer-focus:before:border-t-1 peer-focus:before:border-l-1 peer-focus:before:border-lightBlue peer-focus:after:border-t-1 peer-focus:after:border-r-1 peer-focus:after:border-lightBlue peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Email
                        </label>
                    </div>
                    <div class="relative w-full min-w-[200px]">
                        <input type="text" id="company" name="company" id="placeholder-text"
                        class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-1 focus:border-lightBlue focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" "
                        >
                        <label for="Company" class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-lightBlue peer-focus:before:border-t-1 peer-focus:before:border-l-1 peer-focus:before:border-lightBlue peer-focus:after:border-t-1 peer-focus:after:border-r-1 peer-focus:after:border-lightBlue peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Empresa
                        </label>
                    </div>
                    <div>
                        <div class="relative h-10 w-full min-w-[200px]">
                            <div class="absolute top-2/4 right-3 grid h-5 w-5 -translate-y-2/4 place-items-center text-blue-gray-500">
                                <i class="fa fa-eye-slash" aria-hidden="true" id="eye" onclick="toggle()"></i>
                            </div>
                            <input type="password" id="password" name="password" id="placeholder-text"
                              class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-1 focus:border-lightBlue focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                              placeholder=" "
                              >
                            <label for="Password" class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-lightBlue peer-focus:before:border-t-1 peer-focus:before:border-l-1 peer-focus:before:border-lightBlue peer-focus:after:border-t-1 peer-focus:after:border-r-1 peer-focus:after:border-lightBlue peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Palavra-passe
                            </label>
                          </div>
                    </div>
                    <div class="flex mt-4">
                        <input type="checkbox" id="checkbox" required>
                        <label class="text-xs ml-1">
                            Concorda com os termos da nossa <strong class="text-lightBlue underline cursor-pointer" onclick="privacy()">política de privacidade</strong>.
                        </label>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button id="myBtn">Submeter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="popup" class="hidden fixed flex justify-center h-full w-full top-0 left-0 items-center bg-transparentBg z-10">
    <div class="rounded-lg bg-white p-5 h-500 w-1000 overflow-auto">
        <strong class="flex justify-center font-betatron">Política de Privacidade</strong>
        <div class="mt-4">
            <p>
                A sua privacidade é importante para nós. É política do Digi4Construction respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Digi4Construction e em outros sites que possuímos e operamos.
            </p>

            <p class="mt-4">
                Solicitamos informações pessoais apenas quando realmente precisamos delas para fornecer-lhe um serviço. Fazemo-lo de maneira justa e legal, com o seu conhecimento e consentimento. Também informamos o motivo da coleta e como essas informações serão utilizadas.
            </p>
            <p class="mt-4">
                Retemos apenas as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemo-los por meios comercialmente aceitáveis para evitar perdas, roubos, acesso, divulgação, cópia, uso ou modificação não autorizados.
            </p>

            <p class="mt-4">
                Não compartilhamos publicamente informações de identificação pessoal ou com terceiros, exceto quando exigido por lei.
            </p>

            <p class="mt-4">
                O nosso site pode conter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e as práticas desses sites, e não podemos aceitar responsabilidade por suas políticas de privacidade respectivas.
            </p>

            <p class="mt-4">
                Você é livre para recusar a nossa solicitação de informações pessoais, compreendendo que talvez não possamos fornecer alguns dos serviços desejados.
            </p>

            <p class="mt-4">
                Ao continuar a utilizar o nosso site, consideraremos que você aceita as nossas práticas de privacidade e tratamento de informações pessoais. Se tiver alguma dúvida sobre como lidamos com os dados do utilizador e informações pessoais, entre em contacto connosco.
            </p>

            <strong class="flex justify-center font-betatron">Compromisso do Utilizador</strong>

            <h2 class="mt-4">O utilizador compromete-se a fazer uso adequado dos conteúdos e da informação que o Digi4Construction oferece no site, nomeadamente:</h2>
            <ul class="list-disc ml-8">
                <li>Não se envolver em atividades ilegais ou contrárias à boa fé e à ordem pública;</li>
                <li>Não difundir propaganda ou conteúdo de natureza racista, xenófoba, ou qualquer tipo de apologia ao terrorismo ou contra os direitos humanos;</li>
                <li>Não causar danos aos sistemas físicos (hardware) e lógicos (software) do Digi4Construction, de seus fornecedores ou de terceiros, nem introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software capazes de causar os danos anteriormente mencionados.</li>
            </ul>

            <p class="mt-4">
                Mais Informações
            </p>

            <p class="mt-4">
                Esperamos que esteja esclarecido e, como mencionado anteriormente, caso haja alguma dúvida sobre a necessidade de fornecer determinadas informações, geralmente é mais seguro deixar os cookies ativados caso interaja com um dos recursos que utiliza em nosso site.
            </p>

            <p class="mt-4">
                Esta política entra em vigor em 24 de maio de 2023.
            </p>
        </div>
        <div class="flex justify-center mt-4">
            <button id="myBtn" onclick="privacy()">Fechar</button>
        </div>
    </div>
</div>

<script>
    var state = false;
    var hidden = true;

    const inputs = document.querySelectorAll('input');

    inputs.forEach(input => {
        input.addEventListener('input', validateInput);
    });

    function validateInput() {
        if (this.value.trim() !== '') {
            this.classList.add('border-t-transparent'); // Add styling for invalid input
        } else {
            this.classList.remove('border-t-transparent'); // Remove styling for valid input
        }
    }

    function toggle() {
        var eyeIcon = document.getElementById('eye');
        if (state) {
            document.getElementById("password").setAttribute("type", "password");
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
            state = false;
        } else {
            document.getElementById("password").setAttribute("type", "text");
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
            state = true;
        }
    }

    function privacy() {
        var popup = document.getElementById('popup');
        if (hidden) {
            popup.classList.remove('hidden');
            hidden = false;
        } else {
            popup.classList.add('hidden');
            hidden = true;
        }
    }
</script>
