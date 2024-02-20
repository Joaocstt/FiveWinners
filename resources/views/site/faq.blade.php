@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase">Dúvidas sobre o ranking</h6>
            <hr/>
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            O que é o ranking?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>O ranking é uma ferramenta que classifica os alunos com base no desempenho em diversas atividades dentro da sala de aula. Ele é utilizado para acompanhar o progresso dos estudantes ao longo do tempo e pode incluir diferentes tipos de avaliações, como participação em aula, trabalhos, provas e projetos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Qual objetivo do ranking?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Além de fornecer uma visão geral do seu desempenho individual, o ranking também pode ser uma forma de motivá-lo a se esforçar mais e aprimorar suas habilidades acadêmicas. Ele pode ser usado como uma ferramenta de reconhecimento para você, caso se destaque, e como um incentivo para que você busque melhorar, se precisar. Essa abordagem estimula você e seus colegas a competirem de forma saudável entre si, promovendo um ambiente de aprendizado dinâmico e colaborativo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            As ativadades são realizas online e presencial?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As provas e atividades que valem pontos só são aplicadas presencialmente, garantindo um ambiente de avaliação controlado e justo. Essa abordagem permite que os professores monitorem de perto o processo de avaliação, garantindo a integridade e a validade dos resultados.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            O que devo fazer se perder um dia de avaliação valendo pontos?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <p> Infelizmente, se você perder um dia de avaliação, as opções de recuperação são limitadas. A menos que você tenha um atestado comprovado de ausência por motivos de saúde ou outro compromisso excepcional, geralmente não há como recuperar a oportunidade perdida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                            Premiação
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Os prêmios estão listados na página inicial, e há a possibilidade de receber bonificações adicionais, ou seja, ganhar mais itens ou benefícios. Todas as premiações serão entregues ao final do curso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

@endsection
