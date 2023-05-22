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
        <strong class="flex justify-center font-betatron">Termos do Acordo de Privacidade do utilizador</strong>
        <div class="mt-4">
            <p>Agradecemos o seu interesse no Digi4Construction, uma plataforma digital que visa facilitar a gestão do ciclo de vida de edifícios e infraestruturas através da digitalização. Esta Política de Privacidade explica como coletamos, usamos, divulgamos e protegemos as informações pessoais que você fornece ao usar nossa plataforma. É importante ler esta política com atenção para entender nossas práticas em relação aos seus dados pessoais.</p>

            <h2 class="mt-4">Coleta de Informações:</h2>
            <ul class="list-disc ml-8">
                <li>Coletamos informações pessoais que você fornece voluntariamente ao se cadastrar na plataforma Digi4Construction, como seu nome, endereço de e-mail e informações de contato.</li>
                <li>Também podemos coletar informações sobre o uso que você faz da plataforma, como suas interações, preferências e atividades dentro do sistema.</li>
            </ul>

            <h2 class="mt-4">Uso das Informações:</h2>
            <ul class="list-disc ml-8">
                <li>Utilizamos as informações coletadas para operacionalizar e melhorar a plataforma Digi4Construction, fornecendo recursos e serviços personalizados.</li>
                <li>Podemos utilizar seus dados para enviar comunicações relacionadas à plataforma, como atualizações, notificações e informações importantes sobre sua conta.</li>
                <li>Os dados podem ser utilizados para análises estatísticas e pesquisas internas, desde que sejam anonimizados e não identifiquem diretamente você.</li>
            </ul>

            <h2 class="mt-4">Compartilhamento de Informações:</h2>
            <ul class="list-disc ml-8">
                <li>Não vendemos, alugamos ou divulgamos suas informações pessoais a terceiros, exceto quando exigido por lei ou quando você nos autorizar explicitamente.</li>
                <li>Podemos compartilhar seus dados com parceiros e prestadores de serviços que nos auxiliam na operação e melhoria da plataforma, mediante contratos que garantam a proteção de suas informações.</li>
            </ul>

            <h2 class="mt-4">Segurança dos Dados:</h2>
            <ul class="list-disc ml-8">
                <li>Implementamos medidas de segurança técnicas e organizacionais para proteger suas informações contra acesso não autorizado, uso indevido, alteração ou divulgação.</li>
                <li>No entanto, é importante ressaltar que nenhum método de transmissão ou armazenamento de dados é totalmente seguro. Portanto, não podemos garantir a segurança absoluta de suas informações.</li>
            </ul>

            <h2 class="mt-4">Retenção de Dados:</h2>
            <ul class="list-disc ml-8">
                <li>Manteremos suas informações pessoais pelo tempo necessário para cumprir as finalidades descritas nesta política, a menos que uma retenção mais longa seja exigida ou permitida por lei.</li>
            </ul>

            <h2 class="mt-4">Seus Direitos:</h2>
            <ul class="list-disc ml-8">
                <li>Você tem o direito de acessar, corrigir, atualizar e excluir suas informações pessoais, sujeito às limitações legais e contratuais.</li>
                <li>Também pode optar por não receber comunicações promocionais nossas, seguindo as instruções de cancelamento de inscrição fornecidas.</li>
            </ul>

            <h2 class="mt-4">Alterações na Política de Privacidade:</h2>
            <ul class="list-disc ml-8">
                <li>Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão publicadas nesta página e entram em vigor imediatamente após a publicação.</li>
            </ul>
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
