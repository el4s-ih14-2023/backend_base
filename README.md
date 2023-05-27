# 環境構築手順

## 初回手順

事前にmakeコマンドを使えるようにしておく必要があります。

1. git clone https://github.com/el4s-ih14-2023/backend_base.git
2. make setup-local # 起動まで自動で行います。

## 2回目以降

1. `make up` # 起動

## 終了時

1. `make down` # 終了

コンテナごと破棄したい場合は

`make destroy`

Laravel 初期-> http://localhost 

# 依存関係の追加時

- `make require package=パッケージ名` # パッケージを追加
- `make require-dev package=パッケージ名` # 開発用パッケージを追加
