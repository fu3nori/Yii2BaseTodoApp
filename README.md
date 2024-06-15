# Yii2BaseTodoApp

## インストール方法
githubからcloneでアプリケーション設置ディレクトリ(htdocsやvar/www/直下等)に設置します。  

次にターミナルでアプリケーションを設置したディレクトリに移動しcomposer installコマンドを実行します。  
次にcomposer updateコマンドを実行します。  

次にアプリケーション設置ディレクトリにあるconfigディレクトリ内のdb.phpをエディタで開きます。  
5行目のdbname=yii_appを任意のDB名にします。  
6️⃣行目の'username' => 'root',を任意のDBユーザー名にします。(デフォルトはroot)  
7行目の'password' => '',を６行目で指定したDBユーザーのパスワードに設定します。  
ターミナルでmysqlを立ち上げ5行目で設定したDB名のDBを作成します。  
use 作成したDB名;とコマンドして作成したDBを使うようにします。  
設置したアプリケーションディレクトリ直下にあるyii_app.sqlに記載されたSQL分を実行します。  
ブラウザでアプリケーションを設置したディレクトリ/webにアクセスします。  
  
enjoy!