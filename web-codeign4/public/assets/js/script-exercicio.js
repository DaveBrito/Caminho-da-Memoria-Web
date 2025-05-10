function mudarTexto() {
    const elementoTexto = document.getElementById('texto');
    const textoOriginal = elementoTexto.innerText; // Captura o texto original
    const palavraAntiga = "Cognitivos"; // Palavra a ser substituída
    const novaPalavra1 = "Racionais"; // Nova palavra a ser adicionada
    const novaPalavra2 = "Psicológicos"; // Segunda nova palavra a ser adicionada

    // Define um pequeno atraso antes de iniciar a animação
    setTimeout(() => {
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
                            // Após adicionar a nova palavra, espera e apaga "Racionais"
                            setTimeout(() => {
                                let apagarIndex1 = novaPalavra1.length;
                                const apagarRacionais = () => {
                                    if (apagarIndex1 >=  0) {
                                        elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra1.substring(0, apagarIndex1));
                                        apagarIndex1--;
                                        setTimeout(apagarRacionais, 100); // Tempo entre cada letra apagada
                                    } else {
                                        // Após apagar "Racionais", espera e troca para a segunda nova palavra
                                        setTimeout(() => {
                                            let novaIndex2 = 0; // Índice para a segunda nova palavra
                                            const adicionarNovaPalavra2 = () => {
                                                if (novaIndex2 < novaPalavra2.length) {
                                                    elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra2.substring(0, novaIndex2 + 1));
                                                    novaIndex2++;
                                                    setTimeout(adicionarNovaPalavra2, 100); // Tempo entre cada letra adicionada
                                                } else {
                                                    // Após adicionar a segunda nova palavra, espera e apaga "Psicológicos"
                                                    setTimeout(() => {
                                                        let apagarIndex2 = novaPalavra2.length;
                                                        const apagarPsicologicos = () => {
                                                            if (apagarIndex2 >= 0) {
                                                                elementoTexto.innerText = textoOriginal.replace(palavraAntiga, novaPalavra2.substring(0, apagarIndex2));
                                                                apagarIndex2--;
                                                                setTimeout(apagarPsicologicos, 100); // Tempo entre cada letra apagada
                                                            } else {
                                                                // Após apagar "Psicológicos", espera e anima a digitação de "Cognitivos"
                                                                setTimeout(() => {
                                                                    let digitarIndex = 0; // Índice para a palavra "Cognitivos"
                                                                    const digitarCognitivos = () => {
                                                                        if (digitarIndex < palavraAntiga.length) {
                                                                            elementoTexto.innerText = textoOriginal.replace(palavraAntiga, palavraAntiga.substring(0, digitarIndex + 1));
                                                                            digitarIndex++;
                                                                            setTimeout(digitarCognitivos, 100); // Tempo entre cada letra adicionada
                                                                        } else {
                                                                            // Após digitar "Cognitivos", volta para o texto original
                                                                            setTimeout(() => {
                                                                                elementoTexto.innerText = textoOriginal; // Volta para o texto original
                                                                            }, 1000); // Tempo que "Cognitivos" ficará visível
                                                                        }
                                                                    };
                                                                    digitarCognitivos(); // Inicia a animação de digitação de "Cognitivos"
                                                                }, 1000); // Tempo que "Psicológicos" ficará visível
                                                            }
                                                        };
                                                        apagarPsicologicos(); // Inicia a animação de apagar "Psicológicos"
                                                    }, 3000); // Tempo que "Racionais" ficará visível
                                                }
                                            };
                                            adicionarNovaPalavra2(); // Inicia a adição da segunda nova palavra
                                        }, 3000); // Tempo que "Racionais" ficará visível
                                    }
                                };
                                apagarRacionais(); // Inicia a animação de apagar "Racionais"
                            }, 3000); // Tempo que "Racionais" ficará visível
                        }
                    };
                    adicionarNovaPalavra(); // Inicia a adição da nova palavra
                }, 1000); // Tempo que "Cognitivos" ficará visível antes de apagar
            }
        };
        apagarPalavra(); // Inicia a animação de apagar "Cognitivos"
    }, 1000); // Tempo antes de iniciar a animação
}

// Chama a função para iniciar a animação
mudarTexto();