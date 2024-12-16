// Função para mudar o texto
function mudarTexto() {
    const elementoTexto = document.getElementById('texto');
    const textoOriginal = elementoTexto.innerText; // Captura o texto original
    const palavraAntiga = "Usuários"; // Palavra a ser substituída
    const novaPalavra1 = "Familiares!"; // Nova palavra a ser adicionada
    const novaPalavra2 = "Cuidadores!"; // Segunda nova palavra a ser adicionada

    // Define um pequeno atraso antes de iniciar a animação
    setTimeout(() => {
        // Animação para apagar a palavra "Usuários"
        let index = palavraAntiga.length;
        const apagarPalavra = () => {
            if (index >= 0) {
                elementoTexto.innerText = textoOriginal.replace(palavraAntiga, palavraAntiga.substring(0, index));
                index--;
                setTimeout(apagarPalavra, 100); // Tempo entre cada letra apagada
            } else {
                // Após apagar, adiciona a nova palavra
                setTimeout(() => {
                    let novaIndex = 0; // Índice para a nova palavra
                    const adicionarNovaPalavra = () => {
                        if (novaIndex < novaPalavra1.length) {
                            elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra1.substring(0, novaIndex + 1));
                            novaIndex++;
                            setTimeout(adicionarNovaPalavra, 100); // Tempo entre cada letra adicionada
                        } else {
                            // Após adicionar a nova palavra, espera e apaga "Familiares!"
                            setTimeout(() => {
                                let apagarIndex1 = novaPalavra1.length;
                                const apagarFamiliares = () => {
                                    if (apagarIndex1 >= 0) {
                                        elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra1.substring(0, apagarIndex1));
                                        apagarIndex1--;
                                        setTimeout(apagarFamiliares, 100); // Tempo entre cada letra apagada
                                    } else {
                                        // Após apagar "Familiares!", espera e troca para a segunda nova palavra
                                        setTimeout(() => {
                                            let novaIndex2 = 0; // Índice para a segunda nova palavra
                                            const adicionarNovaPalavra2 = () => {
                                                if (novaIndex2 < novaPalavra2.length) {
                                                    elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra2.substring(0, novaIndex2 + 1));
                                                    novaIndex2++;
                                                    setTimeout(adicionarNovaPalavra2, 100); // Tempo entre cada letra adicionada
                                                } else {
                                                    // Após adicionar a segunda nova palavra, espera e apaga "Cuidadores!"
                                                    setTimeout(() => {
                                                        let apagarIndex2 = novaPalavra2.length;
                                                        const apagarCuidadores = () => {
                                                            if (apagarIndex2 >= 0) {
                                                                elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra2.substring(0, apagarIndex2));
                                                                apagarIndex2--;
                                                                setTimeout(apagarCuidadores, 100); // Tempo entre cada letra apagada
                                                            } else {
                                                                // Após apagar "Cuidadores!", espera e anima a digitação de "Usuários"
                                                                setTimeout(() => {
                                                                    let digitarIndex = 0; // Índice para a palavra "Usuários"
                                                                    const digitarUsuario = () => {
                                                                        if (digitarIndex < palavraAntiga.length) {
                                                                            elementoTexto.innerText = textoOriginal.replace(palavraAntiga, palavraAntiga.substring(0, digitarIndex + 1));
                                                                            digitarIndex++;
                                                                            setTimeout(digitarUsuario, 100); // Tempo entre cada letra adicionada
                                                                        } else {
                                                                            // Após digitar "Usuários", volta para o texto original
                                                                            setTimeout(() => {
                                                                                elementoTexto.innerText = textoOriginal; // Volta para o texto original
                                                                            }, 1000); // Tempo que "Usuários" ficará visível
                                                                        }
                                                                    };
                                                                    digitarUsuario(); // Inicia a animação de digitação de "Usuários"
                                                                }, 1000); // Tempo que "Cuidadores!" ficará visível
                                                            }
                                                        };
                                                        apagarCuidadores(); // Inicia a animação de apagar "Cuidadores!"
                                                    }, 3000); // Tempo que "Familiares!" ficará visível
                                                }
                                            };
                                            adicionarNovaPalavra2(); // Inicia a adição da segunda nova palavra
                                        }, 3000); // Tempo que "Familiares!" ficará visível
                                    }
                                };
                                apagarFamiliares(); // Inicia a animação de apagar "Familiares!"
                            }, 3000); // Tempo que "Familiares!" ficará visível
                        }
                    };
                    adicionarNovaPalavra(); // Inicia a adição da nova palavra
                }, 1000); // Tempo após apagar a palavra antes de adicionar a nova
            }
        };
        apagarPalavra(); // Inicia a animação de apagar
    }, 5000); // Tempo de espera antes de iniciar a animação
}

// Chama a função para mudar o texto após 5 segundos
setTimeout(mudarTexto, 5000); // 5000 milissegundos = 5 segundos