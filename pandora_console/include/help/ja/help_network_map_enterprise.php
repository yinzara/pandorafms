<?php
/*
* @package Include/ja
*/
?>

<h1>ネットワークマップコンソール</h1>

<p>Pandora FMS Enterprise では、編集可能なネットワークマップを作成することができます。ネットワーク参照メニューにあるオープンソース版のものと比べるとより対話形式になっています。</p>

<p>オープンソース版に対して Enterprise 版のネットワークマップでは、次のような機能があります。</p>

<li>1000エージェント以上をモニタリングできる大きなネットワークマップ</li>
<li>システムの全てのネットワークトポロジに対するリアルタイムモニタリング</li>
<li>手動による定義や、エージェントグループでの自動生成といった、異なるネットワークトポロジ表示</li>
<li>仮想ポイントを通した異なるトポロジへのリンク</li>
<li>トポロジビュー内での操作</li>
<li>一括でのノードの追加</li>
<li>ノードの特徴の編集</li>
<li>ビュー内での以下を調整可能: <br>
            - ノードの位置<br>
            - ノード間の関係</li>

<p>ネットワークマップには以下を含めることができます。</p>

    <p>エージェントを追加できるマップを表現する<b>実ノード</b>。これらのノードは、エージェントの OS と、次に示すようなエージェントの状態を示す丸いアイコン(丸がデフォルトですが他の形も選択できます)を表示します。</p>
        <li>緑: 正常状態</li>
        <li>赤: いくつかのモジュールが障害状態</li>
        <li>黄色: いくつかのモジュールが警告状態</li>
        <li>オレンジ: エージェントでいくつかのアラートが発報中</li>
        <li>グレー: エージェントが不明状態</li>
    <p><b>仮想ノード</b>は、他のネットワークマップへのリンクや、単純な個人的に設定したポイントを表します。もちろん、任意の形状(円、菱形、四角)、大きさ、テキストを設定することができます。他のマップへのリンクの場合、色は次のルールに従い、カスタマイズすることができません。</p>
        <li>緑: リンクしたマップの全ノードが正常。</li>
        <li>赤: リンクしたマップのいずれかのノードが障害状態。</li>
        <li>黄色: リンクしたマップのいずれかのノードが警告状態。</li>
        <li>オレンジ、グレー: 他の色のルールと同じです。</li>

<h2>ミニマップ</h2>

<p>ミニマップはマップ全体を表現するものですが、通常のマップに比べると小さいマップです。すべてのノードが表示されますが、状態や関係は表示されません。仮想ポイントを除いて、緑で表示されます。マップの一部の表示では、赤い四角も表示されます。</p>

<p>左上に表示されており、矢印アイコンをクリックすると隠すことができます。
</p>


<h2>コントロールパネル</h2>

<p>コントロールパネルからは、ネットワークマップのより複雑な操作ができます。</p>

<p>これは右上に隠れています。ミニマップと同様に、矢印をクリックすることで表示できます。</p>
<?php html_print_image ("images/help/netmap1.png", false, array('width' => '550px')); ?>

<p>操作オプションは次の通りです。</p>

    <li>ノードの状態の更新間隔の変更。</li>
    <li>強制状態更新。</li>
    <li>簡単なエージェントの検索を使った、エージェントの追加。新規ノードは、マップの左上の座標 (0,0) に表示されます。</li>
    <li>グループによるフィルタリングでの複数エージェントの追加。指定したグループに属していてまだマップに追加されていないエージェントを複数選択できる一覧が表示されます。</li>
    <li>マップの表示部分のスクリーンショット。</li>
    <li>仮想ポイントの追加。名前の文字列、範囲で指定する大きさ、形状、デフォルトの色を選択できます。マップへのリンクを設定することもできます。</li>
    <li>エージェントの検索。選択するとインテリジェント制御により、エージェントがある部分のマップへ表示が移ります。</li>
    <li>拡大。ネットワークマップの拡大レベルを変更します。</li>

<h2>詳細表示ウインドウ</h2>

<p>詳細表示ウインドウは、一つのエージェントのビジュアル表示です。開いたマップと同じ頻度で更新されます。個々のウインドウは完全に独立しているため、複数のウインドウを開くことができます。</p>


<?php html_print_image ("images/help/netmap2.png", false, array('width' => '550px')); ?><br><br>



    <p>エージェントの状態と同じ色の枠で表示されます。<br>
    エージェント名は、Pandora のエージェントのページへのリンクになっています。<br>
    ウインドウ内には、不明状態ではないすべてのモジュールが、緑や赤といったモジュールの状態に応じて表示されます。<br>
        モジュールをクリックすると、モジュールのメインデータと共に簡単な説明が表示されます。<br>
    枠の中には、SNMP Proc のモジュールがあります。ネットワーク機器関連のエージェントで、ネットワークインタフェースの監視に使われます。<br></p>

<h2>仮想ポイントのパレット
</h2>
<p>仮想ポイントの詳細を表示すると、仮想ポイントを編集するためのオプションパレットをポップアップウインドウで表示します。</p>

<?php html_print_image ("images/help/netmap3.png", false, array('width' => '550px')); ?><br><br>


<p>次のオプションのフォームがあります。</p>

    <li>仮想ポイントの名前。</li>
    <li>仮想ポイントの大きさ。</li>
    <li>仮想ポイントの形状。</li>
    <li>仮想ポイントの色。</li>
    <li>仮想ポイントにリンクするマップ。</li>

<h2>ネットワークマップの作成</h2>

<p>ネットワークマップを作成するには、次のようにします。</p>

    <li>一つのグループに含まれる全エージェントを表示。</li>
    <li>空のネットワークマップを作成。</li>


<br><br>以下に作成時のフォームに関してまとめます。<br><br>

    <li><b>名前(Name):</b> ネットワークマップの名前です。</li>
    <li><b>グループ(Group):</b> グループ ACL です。どのグループに属するエージェントを含めたマップを作成したいかを指定します。</li>
    <li><b>ネットワークマップ作成元(Creating the network map from):</b> 作成時にのみ存在するオプションです。前述のグループで選択したエージェントから作成するか、空のネットワークマップを作成するかの、ネットワークマップの作成方法の選択です。</li>
    <li><b>ネットワークマップの大きさ(Size of the network map):</b> ネットワークマップの大きさを指定できます。デフォルトでは、幅、高さ共に 3000 です。</li>
    <li><b>ネットワークマップ作成方法(Method for creating of the network map):</b> ネットワークマップを作成するときのノードの配置方法です。デフォルトは放射状ですが、次の形状を選択できます。</li>
        <p>- <i>放射状(Radial):</i> 全てのノードが仮想ノードの周りに配置されます。<br>
        - <i>円(Circular):</i> ノードが同心円状に表示されます。<br>
        - <i>フラット(Flat):</i> ノードが木構造状に表示されます。<br>
        - <i>スプリング 1、スプリング 2(spring1, spring2):</i> フラットの異なるパターンです。<br>
    <li><b>ネットワークマップ更新(Networkmap Refresh):</b> ネットワークマップに含まれるノードの状態の更新間隔です。デフォルトは 5分です。</p>

残りのフィールドは無効になっています。例えば、"マップのリサイズ(resizing map)"は、マップが作成された後にのみ有効になります。<br><br>


マップ編集の詳細については、<a href="http://www.openideas.info/wiki/index.php?title=Pandora:Documentation_ja:Data_Presentation#.E3.82.A8.E3.83.B3.E3.82.BF.E3.83.BC.E3.83.97.E3.83.A9.E3.82.A4.E3.82.BA.E7.89.88.E3.81.AE.E3.83.8D.E3.83.83.E3.83.88.E3.83.AF.E3.83.BC.E3.82.AF.E3.83.9E.E3.83.83.E3.83.97.E3.82.B3.E3.83.B3.E3.82.BD.E3.83.BC.E3.83.AB">公式ドキュメント(エンタープライズ版のネットワークマップコンソール)</a> を参照してください。
