<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DebugController extends Controller
{

    protected $excludedRetailerList = "15648
14435
14433
12981
12986
12987
12980
12982
13925
13129
14884
14504
16948
13591
12022
14105
13008
13594
13994
15763
15766
15765
13604
15143
13993
15140
15127
14892
14894
14113
5440
15832
12718
1764
12563
12557
17967
6894
3862
12012
17666
2120
17219
17480
731
16163
15722
16206
16672
13409
13462
13414
16035
16425
17748
17739
17223
17791
16381
16400
16222
13176
13223
16188
17557
17474
14969
16067
1262
16699
16687
7371
17390
2694
13866
594
1150
96
159
1450
650
5708
877
16430
14015
5768
183
6479
17393
17471
16221
17389
17923
13202
17392
12953
16543
17882
5901
16218
17386
17387
17388
16219
16220
13428
14029
13875
17374
14991
7875
13440
16359
17888
13439
13486
17919
17873
13450
15480
15481
13597
16389
16356
17404
17886
16402
13455
12003
16201
13258
13355
15033
13453
13529
11584
12883
17648
13874
14642
16452
16429
16451
13467
16453
12684
2778
2812
3158
2830
14190
147
13650
2498
11279
17655
13464
5438
16455
14582
5883
6344
5886
15347
5828
4162
6076
974
5742
16436
17936
4392
16454
16450
17857
15085
16257
16248
17657
15518
6477
16260
13677
16264
15450
15624
15456
17689
16278
16131
16130
15529
17948
18101
16294
12882
16527
205
16584
16285
15555
16540
13353
16284
15622
13678
13708
16357
17937
17933
16539
16590
13681
16729
16924
16839
13683
12394
17902
13710
16569
16804
14446
17237
17284
17285
17867
13361
13378
17911
17318
16667
17635
17287
17286
13375
13374
17985
17314
17938
17309
13917
14056
13404
15580
17300
13712
160
17364
17305
860
14597
16666
17943
2372
4772
17350
2356
11581
4824
157
18071
17358
8579
25
2400
14583
17925
11579
11574
11514
15040
11580
6881
18085
14641
6916
370
14240
16795
16224
14606
14853
6552
5398
15044
13509
6939
6841
13772
7623
17972
11802
13889
14030
13734
13465
14696
14687
17403
14980
14762
4782
2476
13476
4174
2370
13785
2344
12589
14972
8530
8082
8116
18039
17465
4778
11371
393
17803
13738
17580
13484
18043
12871
12670
17790
60
17075
16931
15169
16006
15217
15126
15166
15119
15233
7943
7944
18156
17274
18093
18105
7746
13911
14964
13609
13719
14277
13600
7751
7708
7709
7720
15274
15251
15313
18167
16829
17498
15286
14484
6032
15299
15305
15189
15230
15258
15329
15397
15317
15656
13795
13789
14013
13881
17708
12691
13592
18150
14183
14653
13195
15159
15455
6129
7428
8777
9200
15797
12641
11516
7463
6782
9146
5847
18049
15972
17467
16940
15351
16573
7069
6310
16932
16880
15874
16716
18122
16173
15754
17018
8737
13957
17355
16733
17649
6820
17847
17846
14328
17859
5568
14962
12380
17964
17606
7206
14322
6858
15446
17575
12537
16930
17153
16847
13499
9225
13612
13593
16935
17182
13755
17148
14300
16933
16934
16936
16992
12917
13601
13526
15953
16809
13760
16791
18053
6142
14489
9148
17802
17353
17086
16024
16306
16197
17843
17091
17874
163
16996
13092
13120
13759
16938
13813
15778
17520
15783
6748
13508
17615
13003
17490
17500
17727
17692
17725
17724
12665
17726
17736
17728
17717
17696
6856
16548
13101
7113
7034
6579
13030
6577
13842
15021
8725
16732
6633
17707
7632
14208
15794
15777
17519
17995
17494
18095
6524
17536
18089
6539
15012
13717
18125
13207
12644
13714
15424
16894
14599
16757
15970
14510
14345
14668
12626
16756
17149
15973
16427
15602
14254
16068
17087
17175
13890
13906
6716
15889
15887
15905
15884
17713
16011
15817
15823
17877
9111
13840
17852
16423
17811
15939
17482
6753
15931
17623
16697
17672
8176
12826
7123
13940
14001
14075
14012
9569
9695
12184
9692
14619
14414
14535
14547
13679
14456
11469
14563
4718
13071
14454
13171
16118
13286
14179
5857
2348
4800
6026
18121
17529
18120
17627
17641
11576
12425
12361
11582
9425
14944
14974
14278
12446
13308
12729
11578
11577
10967
17829
12848
0
14224
15609
17880
17879
17878
14031
8729
9178
17853
16426
16591
16592
15990
12565
9149
18091
12813
8781
12561
11470
13770
7462
13891
12591
13848
13504
11392
12593
14022
12550
12587
12597
17258
12653
12595
13507
12792
14772
14860
13897
12695
11074
9510
14032
13979
13173
13586
12807
13919
7402
11472
14000
14049
9030
14811
17970
1590
15315
15599
14209
12063

14201

0
12393
6072
12825
14248
11438
12829
14027
12832
12823
12828
11690
14026
12830
12833
11860
13303
14259
14444
9631
3808
14795
17621
578
18166
16837
17084
17568
8069
8841
17974
14294
13902
13916
16091
12099
11723
14221
13114
14218
13189
18079
14222
13248
13269
13165
13324
14610
12317
15951
17966
14694
14460
17603
14275
14722
18012
17949
14600
14652
13997
14242
18109
14934
17622
14276
14353
14445
17620
14117
12944
17738
9021
15663
15670
15652
15736
15660
15667
15927
14751
15698
14727
14865
14808
14758
14753
14852
7205
10941
15600
13040
14186
14352
13589
14187
13590
12309
14584
13959
18158
11439
11583
13261
9280
15849
16428
13489
14686
";

protected $notEligibleRetailer = "15648
14435
14433
12981
12986
12987
12980
12982
13925
13129
14884
14504
16948
13591
12022
14105
13008
13594
13994
15763
15766
15765
13604
15143
13993
15140
15127
14892
14894
14113
5440
15832
12718
1764
12563
12557
17967
6894
3862
12012
17666
2120
17219
17480
731
16163
15722
16206
16672
13409
13462
13414
16035
16425
17748
17739
17223
17791
16381
16400
16222
13176
13223
16188
17557
17474
14969
16067
1262
16699
16687
7371
17390
2694
13866
594
1150
96
159
1450
650
5708
877
16430
14015
5768
183
6479
17393
17471
16221
17389
17923
13202
17392
12953
16543
17882
5901
16218
17386
17387
17388
16219
16220
13428
14029
13875
17374
14991
7875
13440
16359
17888
13439
13486
17919
17873
13450
15480
15481
13597
16389
16356
17404
17886
16402
13455
12003
16201
13258
13355
15033
13453
13529
11584
12883
17648
13874
14642
16452
16429
16451
13467
16453
12684
2778
2812
3158
2830
14190
147
13650
2498
11279
17655
13464
5438
16455
14582
5883
6344
5886
15347
5828
4162
6076
974
5742
16436
17936
4392
16454
16450
17857
15085
16257
16248
17657
15518
6477
16260
13677
16264
15450
15624
15456
17689
16278
16131
16130
15529
17948
18101
16294
12882
16527
205
16584
16285
15555
16540
13353
16284
15622
13678
13708
16357
17937
17933
16539
16590
13681
16729
16924
16839
13683
12394
17902
13710
16569
16804
14446
17237
17284
17285
17867
13361
13378
17911
17318
16667
17635
17287
17286
13375
13374
17985
17314
17938
17309
13917
14056
13404
15580
17300
13712
160
17364
17305
860
14597
16666
17943
2372
4772
17350
2356
11581
4824
157
18071
17358
8579
25
2400
14583
17925
11579
11574
11514
15040
11580
6881
18085
14641
6916
370
14240
16795
16224
14606
14853
6552
5398
15044
13509
6939
6841
13772
7623
17972
11802
13889
14030
13734
13465
14696
14687
17403
14980
14762
4782
2476
13476
4174
2370
13785
2344
12589
14972
8530
8082
8116
18039
17465
4778
11371
393
17803
13738
17580
13484
18043
12871
12670
17790
60
17075
16931
15169
16006
15217
15126
15166
15119
15233
7943
7944
18156
17274
18093
18105
7746
13911
14964
13609
13719
14277
13600
7751
7708
7709
7720
15274
15251
15313
18167
16829
17498
15286
14484
6032
15299
15305
15189
15230
15258
15329
15397
15317
15656
13795
13789
14013
13881
17708
12691
13592
18150
14183
14653
13195
15159
15455
6129
7428
8777
9200
15797
12641
11516
7463
6782
9146
5847
18049
15972
17467
16940
15351
16573
7069
6310
16932
16880
15874
16716
18122
16173
15754
17018
8737
13957
17355
16733
17649
6820
17847
17846
14328
17859
5568
14962
12380
17964
17606
7206
14322
6858
15446
17575
12537
16930
17153
16847
13499
9225
13612
13593
16935
17182
13755
17148
14300
16933
16934
16936
16992
12917
13601
13526
15953
16809
13760
16791
18053
6142
14489
9148
17802
17353
17086
16024
16306
16197
17843
17091
17874
163
16996
13092
13120
13759
16938
13813
15778
17520
15783
6748
13508
17615
13003
17490
17500
17727
17692
17725
17724
12665
17726
17736
17728
17717
17696
6856
16548
13101
7113
7034
6579
13030
6577
13842
15021
8725
16732
6633
17707
7632
14208
15794
15777
17519
17995
17494
18095
6524
17536
18089
6539
15012
13717
18125
13207
12644
13714
15424
16894
14599
16757
15970
14510
14345
14668
12626
16756
17149
15973
16427
15602
14254
16068
17087
17175
13890
13906
6716
15889
15887
15905
15884
17713
16011
15817
15823
17877
9111
13840
17852
16423
17811
15939
17482
6753
15931
17623
16697
17672
8176
12826
7123
13940
14001
14075
14012
9569
9695
12184
9692
14619
14414
14535
14547
13679
14456
11469
14563
4718
13071
14454
13171
16118
13286
14179
5857
2348
4800
6026
18121
17529
18120
17627
17641
11576
12425
12361
11582
9425
14944
14974
14278
12446
13308
12729
11578
11577
10967
17829
12848
0
14224
15609
17880
17879
17878
14031
8729
9178
17853
16426
16591
16592
15990
12565
9149
18091
12813
8781
12561
11470
13770
7462
13891
12591
13848
13504
11392
12593
14022
12550
12587
12597
17258
12653
12595
13507
12792
14772
14860
13897
12695
11074
9510
14032
13979
13173
13586
12807
13919
7402
11472
14000
14049
9030
14811
17970
1590
15315
15599
14209
12063

14201

0
12393
6072
12825
14248
11438
12829
14027
12832
12823
12828
11690
14026
12830
12833
11860
13303
14259
14444
9631
3808
14795
17621
578
18166
16837
17084
17568
8069
8841
17974
14294
13902
13916
16091
12099
11723
14221
13114
14218
13189
18079
14222
13248
13269
13165
13324
14610
12317
15951
17966
14694
14460
17603
14275
14722
18012
17949
14600
14652
13997
14242
18109
14934
17622
14276
14353
14445
17620
14117
12944
17738
9021
15663
15670
15652
15736
15660
15667
15927
14751
15698
14727
14865
14808
14758
14753
14852
7205
10941
15600
13040
14186
14352
13589
14187
13590
12309
14584
13959
18158
11439
11583
13261
9280
15849
16428
13489
14686
";

protected $eligibleRetailers = "14743
16679
16680
15486
17889
13413
4768
13331
15155
16265
17994
12857
4780
4766
4774
16789
17809
12794
4896
16033
2298
2300
17381
3986
16235
17895
13395
8636
6772
7196
7227
17065
17586
13326
11395
8640
8783
15627
6036
6062
9286
6037
6002
5909
6810
4904
13036
6566
13968
5908
9130
15367
16993
16988
6519
16995
17493
15752
14569
17914
16394
12664
6567
17055
5375
8827
1702
15601
6565
2660
16441
12874
1520
6971
12661
5889
291
13041
8004
8005
7969
17558
16571
9700
18011
5897
4154
2560
5779
5780
15994
15179
4910
8607
17647
13704
13496
16304
17246
18139
15235
6225
6563
15933
14643
11738
8667
8790
8847
13122
13127
13126
15108
14194
11175
15745
13299
17416
17920
3924
3882
13297
14915
4124
6056
6463
13787
7074
17517
17760
14191
17409
12856
6057
7202
7460
9359
4884
16682
17903
4794
14841
17229
17210
17093
13032
16122
9288
5854
15553
16125
16144
2450
17826
6859
16746
4792
11526
2454
15842
12782
8800
17473
9040
15775
17885
16385
17626
13247
17658
16448
14824
18014
15759
15758
17706
9272
9270
7433
8639
15732
5047
12622
17419
13229
8610
5371
17429
17227
12808
14305
8826
8656
14363
5101
9157
5293
17275
11621
17978
6040
15110
13991
7255
11100
13042
9156
17592
12721
12720
16684
16685
12771
15891
12696
17788
17833
17899
13187
16269
14141
14268
16473
17288
13405
17917
13533
14255
13532
13121
9697
7445
13613
8630
17856
11780
13982
16364
13421
6642
12520
6312
773
6045
14361
4304
11591
17685
6513
12884
5386
17646
78
116
10589
6555
5434
1074
920
6063
1078
2754
75
219
2522
16836
17475
1080
1076
986
145
523
17375
6553
13055
15358
16853
5950
16342
13829
14481
17481
17518
12677
13895
7898
14116
9339
17538
499
161
302
17887
16461
16468
17904
171
492
17945
5910
18112
5995
467
15287
15301
6305
17260
8056
6833
6973
12774
13680
18063
14003
18111
13584
9405
17848
17876
14415
12491
18141
17969
13087
13086
14951
17168
17909
13112
16390
14139
14589
14588
14918
12699
13558
8798
14611
16231
16268
5432
14640
14140
11538
7435
7455
17428
14634
18069
12869
7702
14976
17693
11120
10938
14307
9240
15204
16040
15517
17270
6465
15205
15206
17682
17111
15917
16039
18038
17729
17695
14821
5422
11861
16620
9295
13184
13668
17308
13028
15282
14757
9386
12492
4338
7138
6050
16481
17327
11572
14330
6544
9107
8721
6834
6809
6836
7036
6855
11386
15588
15925
17865
12740
7253
13905
17307
11985
15216
13516
16724
12636
17141
16728
13510
12948
1324
664
944
18020
228
184
16298
16230
1326
353
17209
17454
17098
7454
8612
15530
14720
9385
17832
17066
14439
14119
17961
9160
16965
16963
16966
17547
18057
17499
14567
6643
14237
17918
17190
7429
17661
9274
9273
14350
17555
15052
17916
17289
17382
15245
7430
8779
7446
7451
8778
15151
13981
11608
2190
17292
18044
18124
17160
6913
15271
7158
7191
9248
13861
5584
8865
5849
5848
15340
7369
13862
7370
6130
14960
14543
14409
13253
14710
16374
18048
14725
16564
16689
788
4808
16129
16808
6165
4754
7534
7536
7541
6157
795
12497
18056
7154
17170
6632
7452
6656
13996
5394
12819
6182
7225
1544
11814
11033
13528
12726
17759
6509
13392
14138
8801
17830
14402
17273
604
14362
17254
8179
6453
14463
16544
14568
13336
17976
5416
13388
14541
4858
14612
14613
14615
12940
16313
13736
13833
13808
13790
15490
15321
16844
2462
4802
4806
12480
5856
5853
5855
14289
12814
5777
16434
13503
13660
14598
17593
15967
15968
17146
14124
15613
11459
9018
14873
14864
5840
620
418
17196
17278
17858
6793
9307
14332
6558
14270
6583
17169
15422
17893
14331
13391
16683
17924
14566
11435
5993
6140
8731
16104
6460
14552
12567
12544
8730
5832
5830
11606
14755
14260
12728
9480
10923
5759
12682
14719
16119
9691
17849
12714
5758
14565
16247
16074
16823
13724
6667
14091
13630
14292
14354
14311
12399
14283
16690
17881
6492
17594
7450
6148
17704
17495
11495
11346
14794
14793
14712
14264
7228
6476
15243
7137
7441
6933
13006
5049
15511
18068
14241
17839
8641
9188
8851
16607
10251
17451
8648
17743
18072
9694
15632
15150
15149
12978
15689
17906
14689
17705
17504
17835
6320
15594
18003
15362
14862
9230
9299
9265
9231
16060
4170
16162
13653
4150
3926
361
174
4168
16471
179
13693
16589
12535
13707
14459
5816
181
8593
15107
15311
15285
13603
13980
6107
15190
7076
4274
9195
12532
16216
16215
12529
12530
6452
13278
14364
294
5227
5751
4264
105
6085
12495
12415
15368
18055
11639
14854
9269
12504
14367
18108
17875
14921
14517
17979
13850
9259
6818
12918
17677
15851
18015
17823
9254
17831
16186
4132
7148
17578
17220
17850
13560
14585
18077
5927
14932
13021
17155
15310
14281
7155
7097
6887
6365
9223
8788
17804
12904
7109
5606
18058
7629
2162
18102
109
54
938
13651
13654
13671
5805
56
15501
13953
16482
29
22
17015
17328
173
11731
13380
5807
13481
14973
6053
6658
11374
11370
15157
1410
15593
13512
11430
16915
15196
13327
6540
12995
13259
14702
12609
14754
14198
17921
11685
11691
11689
9209
11688
11686
11687
11873
4102
13427
12167
12127
14728
13131
12905
11729
12242
9198
13870
13939
13285
861
371
4344
3922
4416
868
859
13700
7461
867
13646
9346
741
17405
12994
13776
13534
18031
13045
15628";

    public function any() {
       $eligibleRetailerIds = explode("\n", $this->eligibleRetailers);

       $alreadyAvailabelInDb = DB::connection('flixcar')->table('distributor_restriction')
           ->where('manufacturer_id' , 0)
           ->get()
           ->pluck('distributor_id')
           ->toArray();

       $sql ="-- First adding all missing entries\n\n";

       foreach ($eligibleRetailerIds as $distributor_id) {
            if(in_array($distributor_id, $alreadyAvailabelInDb)) {
                continue;
            }

            $sql .= "-- INSERTING DISTRIBUTOR ID: $distributor_id\n INSERT INTO `distributor_restriction` (`distributor_restriction_id`, `distributor_id`, `manufacturer_id`, `start_date`, `end_date`, `deny`, `apply_product`, `apply_360view`, `apply_document`, `apply_feature`, `apply_file`, `apply_image`, `apply_minisite`, `apply_quikclip`, `apply_review`, `apply_sis`, `apply_specification`, `apply_video`, `apply_accessory`, `apply_comparison`, `apply_header`, `apply_info`, `apply_benefit`, `apply_faq`, `asset_website`, `apply_footnote`, `apply_ugc`, `apply_viewwebar`, `apply_load3dfw`, `apply_videochat`, `apply_view3dfw`, `enabled`, `active`, `cache_active`, `update_date`) VALUES (NULL, '$distributor_id', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '0', '1', '1', '1', '1', '1', '1', '0', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', CURRENT_TIMESTAMP); \n\n";

       }

        $sql .="\n-- ====================\n-- Updating exclude list\n -- ====================\n\n";
        $excludedRetailerList = array_filter(explode("\n", $this->excludedRetailerList));

       foreach ($excludedRetailerList as $distributor_id) {
           $sql .= "-- UPDATING DISTRIBUTOR ID: $distributor_id\n
           UPDATE `distributor_restriction` SET `apply_comparison` = '0' WHERE `distributor_restriction`.`distributor_id` = $distributor_id && manufacturer_id=0 limit 1;\n\n";
       }

       echo $sql;
       die();
    }


}
