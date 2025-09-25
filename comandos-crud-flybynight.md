# Comandos CRUD para o projeto Fly By Night


C -> CREATE -> INSERT (INSERIR/CADASTRAR)
R -> READ -> SELECT (SELECIONAR/CONSULTAR/OBTER)
U -> UPDATE (ATUALIZAR/MODIFICAR)
D -> DELETE (DELETAR/EXCLUIR)

```sql
INSERT INTO fornecedores (nome) VALUES ('Eletrônicos Tabajara');

INSERT INTO fornecedores (nome) VALUES
('Games ABCD'),
('Supermercado Tem de Tudo'),
('Livraria Demais da Conta');
``` 
## Inserindo produtos

```sql
INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'Smartphone Galaxy S23',
    'Equipamento com sistema Android e câmera Full HD',
    1599.50,
    20,
    1
);

INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'TV Led',
    'Tela de 50 polegadas, 4k, 4 entradas HDMI e etc',
    3420,
    12,
    1
);

INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'Senhor dos Anéis: As Duas Torres',
    'Volume 2 da série de livros criados pelo autor J.R.R. Tolkien',
    80.99,
    100,
    4
);
```

## Inserindo lojas

```sql
INSERT INTO lojas(nome) VALUES
('Casas Bahia'),
('Shopping Zona Leste'),
('Bazar das Coisas'),
('Americanas');
```

## Inserindo estoque de protudos pra cada loja

```sql
INSERT INTO lojas_produtos (loja_id, produto_id, estoque) VALUES
(4, 2, 3),
(4, 3, 30),
(1, 2, 10),
(4, 1, 5);
```
## Atualizando registros

```sql
UPDATE fornecedores SET nome = 'Distribuidora XYZ'
WHERE id = 3;

UPDATE produtos SET preco = 2600.77, quantidade = 15
WHERE id = 1;

UPDATE produtos SET preco = 125 WHERE fornecedor_id = 4;

-- Atualizar na tabela lojas_produtos a coluna estoque para 7
-- Onde a loja sera a AMERICANAS (loja_id = 4) E
-- o produto seja SMARTPHONE (produto_id = 1)
UPDATE lojas_produtos SET estoque = 7
WHERE loja_id = 4 and produto_id = 1;
```

## Excluindo registros

```sql
DELETE FROM produtos WHERE id = 4;
```

## Realizando consultas para a visualização de dados

```sql
-- Contando quantos registros existem na tabela produtos
-- O * representa todas as linhas/registros
SELECT COUNT(*) FROM produtos;

-- Exibir apenas o nome, preço e quantidade dos produtos
SELECT nome, preco, quantidade FROM produtos
WHERE preco > 1000;

-- Exibit somente o nome e a descrição dos produtos do
-- Fornecedor Livraria Demais da Conta
SELECT nome, descricao FROM produtos
WHERE fornecedor_id = 4;

-- Versão 2: usamos uma junção de tabelas (produtos e fornecedores)
-- O objetivo é conseguir trazer/exibir TAMBÉM o nome do FORNECEDOR
SELECT
-- nome das colunas/campos precedidos do nome das tabelas correspondentes
    produtos.nome,
    produtos.descricao,
    fornecedores.nome

-- indicando as tabelas que serão "juntadas/combinadas/relacionadas"
FROM produtos JOIN fornecedores

-- Regra de junção baseada nas chaves (estrangeira e primária)
ON produtos.fornecedor_id = fornecedores.id

-- Condição pra essa consulta (produtos do fornecedor Livraria)
WHERE produtos.fornecedor_id = 4; -- Ou fornecedor.id = 4
```

```sql

```

