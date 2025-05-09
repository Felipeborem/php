

f1="TA CERTO"
f2="TA ERRADO"
paste(f1,f2)

x = 10
b = 5
cleytin = x + b

#um monte de if e else

a <- 225
b <- 225
if (a==b) { v=f1
} else {v=f2}
v


a <- 224
b <- 225
if (a==b) { v=10
} else if (a > b) {v=15
} else {v=25}
v

#matriz

### Matrizes
x <- matrix(seq(1:16), nrow=4,ncol=4)
x

x[2,3] #retorna o elemento na segunda linha e terceira coluna da matriz

x[3,  ]   # seleciona a 3ª linha

x[ , 2]   # seleciona a 2ª coluna

x[1,] <- c(13,15,19,30)  #substituir a primeira linha por (13,15,19,30)

x

## dimensão da matriz x

dim(x)

## Concatenar linhas em uma matriz

vet <- c(2,20,12,34)
x2 <- rbind(x,vet)
x2

## Concatenar colunas em uma matriz

v2 <- c(25,10,15,4)
x3 <- cbind(x,v2)
x3



k <- x+2
y <- c(x,k)
y

### Matrizes
x <- matrix(seq(1:16), nrow=60,ncol=70)
x


#-----------------------------------------------------------------
#meu data frame
ID <- seq(1:1)
PF <- c(65)
alt <- c(1.80)
imc <- pes/(alt^2)
dados <- data.frame(ID=ID,PF=pes,altura=alt, imc=imc)
dados


#-----------------------------------------------------------------

### Data frame
a = 9
b = 1
c= a+b

c

ID <- seq(1:6)
pes <- c(62, 70, 52, 98, 90, 70)
alt <- c(1.70, 1.82, 1.75, 1.94, 1.84, 1.61)
imc <- pes/(alt^2)
idade <- c(17, 14, 13, 14 ,45, 16)
regiao <- c("AM","RO","SP","ES","RJ","MG")
dados <- data.frame(ID=ID,peso=pes,altura=alt, imc=imc, idade=idade, reg=regiao)
dados



## Funções uteis para data frame

head(dados)

names(dados) #nome das variaveis do data frame dados

str(dados)  #descricao das variaveis

mean(dados$imc) #média da variavel imc

sd(dados$imc)   #desvio-padrao da variavel imc

summary(dados$imc) #medidas resumo da variavel imc

table(dados$grupo) #tabela de frequencias da variavel grupo


#---------------------------------------------------------------------
if

if (c = 10) { dados
} else {"deu ruim"}


dados

## Adicionar variável de grupo no data frame
gr <- c(rep(1,3),rep(2,3))
dados$grupo <- gr


#-----------------------------

xD=(":O")
paste(f)
#------------------------


c=10

if (c=10)
  "deu bom"
}else{
  "deu ruim"
}
dados

gr


#-----------------------------------------------------------------
#achei legal isso aq👍

ID <- seq(1:6)
pes <- c(62, 70, 52, 98, 90, 70)
alt <- c(1.70, 1.82, 1.75, 1.94, 1.84, 1.61)
imc <- pes/(alt^2)
idade <- c(17, 14, 13, 14 ,45, 16)
regiao <- c("AM","RO","SP","ES","RJ","MG")
dados <- data.frame(ID=ID,peso=pes,altura=alt, imc=imc, idade=idade, reg=regiao)
dados


f1 =dados
f2=("ta errado isso ai")

a = 10
b = 3
if (a == 10) {f1
} else {f2}


#-----------------------------------------------------------------
?read_excel


ID <- seq(1:6)
pes <- c(62, 70, 52, 98, 90, 70)
alt <- c(1.70, 1.82, 1.75, 1.94, 1.84, 1.61)
imc <- pes/(alt^2)
dados <- data.frame(ID=ID,peso=pes,altura=alt, imc=imc)
dados


library(readxl)
dados <- read_excel(path = "Base_CTG_caracterizacao.xls", na="NA")
dados


#na="NA"

library(tidyverse)
library(janitor)

names(dados)

dados <- clean_names(dados) 
names(dados)


dados <- remove_empty(dados,"rows")

dados <- remove_empty(dados,"cols")
names(dados)

library(dplyr)
dados1 <-  distinct(dados,id, .keep_all = TRUE)
dados1

str(dados1)

## converter as variáveis para data reduzida
dados1$data_aval  <- as.Date(dados1$data_aval)
dados1$data_nascimento  <- as.Date(dados1$data_nascimento)
str(dados1)


# A variável indicadora de cor branca (cor_branco) está categorizada
# como 0 para não e 1 para sim.
tabyl(dados1,cor_branco)

dados1$cor_branco <- ifelse(dados1$id==9,1,dados1$cor_branco)

# No R tem um pacote só para manipular fatores: o forcats (for categorial variables).
# Basicamente, o forcats é composto por funções de apenas dois tipos: funções que começam com fct_, que recebem uma lista de fatores e devolvem um fator e funções que começam com lvl_, que modificam os níveis de um fator.
# Primeiro, precisamos informar o R que a variável é fator, com o comando as.factor(.).
library(forcats)
dados1$cor_branco  <- as.factor(dados1$cor_branco)

dados1$cor_branco <- fct_recode(dados1$cor_branco,
                                branco = "1",
                                nbranco = "0")

tabyl(dados1,cor_branco)
#-------------------------------------------------------------------------------

library(stringr)
dados1$corion <- str_to_lower(dados1$corion)
tabyl(dados1,corion)

library(knitr)
library(skimr)

library(skimr)
skim(dados1)
kable(skim(dados1))

dados1
dados


install.packages("xfun", type = "binary")




dados1$data_aval  <- as.Date(dados1$data_aval)
dados1$data_nascimento  <- as.Date(dados1$data_nascimento)
str(dados1)
dados


dados1$igp <-  dados1$igp_semana + dados1$igp_dia/7
dados1

dados1$invdicador_aborto <- ifelse(dados1$aborto >= 1,"sim","nao")
dados

dados1$primpara <- ifelse(dados1$para != 0,"sim","nao")


#igp <- (igp_semana - igp_dia/7 )



library(lubridate)
intervalo <- ymd(dados1$data_nascimento) %-% ymd(dados1$data_aval)

dados1$idade <- intervalo / dyears(1)

skim(dados1, idade)







#-----------------------------------------------------------------


## Funções tidyverse e janitor

library(tidyverse)
library(janitor)

names(dados)

dadosNomesLimpos <- clean_names(dados) # a função clean_names() para primeiro ajuste dos nomes das variaveis
names(dados)






