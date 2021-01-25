# marmot-initial

## 说明

代码文件初始化工具, 初始化代码会默认`100%`单元测试覆盖率.

### 约束

* 后端框架(marmot-framework)必须大于`1.1.3`版本

### 使用说明

```
		marmot-initial

	使用方法: marmot-initial xxx . 如: marmot-initial News

marmot-initial Options:

--overwrite: 覆盖已经生成的文件
```

### 生成代码

生成代码以`News`为例

```
src/News
├── Adapter
│   └── News
│       ├── INewsAdapter.php
│       ├── NewsDbAdapter.php
│       ├── NewsMockAdapter.php
│       └── Query
│           ├── NewsRowCacheQuery.php
│           └── Persistence
│               ├── NewsCache.php
│               └── NewsDb.php
├── Command
│   └── News
│       ├── AddNewsCommand.php
│       └── EditNewsCommand.php
├── CommandHandler
│   └── News
│       ├── AddNewsCommandHandler.php
│       ├── EditNewsCommandHandler.php
│       └── NewsCommandHandlerFactory.php
├── Controller
│   ├── NewsControllerTrait.php
│   ├── NewsFetchController.php
│   └── NewsOperateController.php
├── Model
│   ├── News.php
│   └── NullNews.php
├── Repository
│   └── NewsRepository.php
├── Translator
│   └── NewsDbTranslator.php
├── View
│   ├── NewsSchema.php
│   └── NewsView.php
└── WidgetRule
    └── NewsWidgetRule.php
    
tests/ut/src/News
├── Adapter
│   └── News
│       ├── NewsDbAdapterTest.php
│       ├── NewsMockAdapterTest.php
│       └── Query
│           ├── NewsRowCacheQueryTest.php
│           └── Persistence
│               ├── NewsCacheTest.php
│               └── NewsDbTest.php
├── Command
│   └── News
│       ├── AddNewsCommandTest.php
│       └── EditNewsCommandTest.php
├── CommandHandler
│   └── News
│       ├── AddNewsCommandHandlerTest.php
│       ├── EditNewsCommandHandlerTest.php
│       └── NewsCommandHandlerFactoryTest.php
├── Controller
│   ├── NewsControllerTraitTest.php
│   ├── NewsFetchControllerTest.php
│   └── NewsOperateControllerTest.php
├── Model
│   ├── NewsTest.php
│   └── NullNewsTest.php
├── Repository
│   └── NewsRepositoryTest.php
├── Translator
│   └── NewsDbTranslatorTest.php
├── Utils
│   ├── MockFactory.php
│   └── NewsUtils.php
└── WidgetRule
    └── NewsWidgetRuleTest.php
    
tests/mock/News
├── Adapter
│   └── News
│       ├── MockNewsDbAdapter.php
│       └── Query
│           ├── MockNewsRowCacheQuery.php
│           └── Persistence
│               ├── MockNewsCache.php
│               └── MockNewsDb.php
├── CommandHandler
│   └── News
│       ├── MockAddNewsCommandHandler.php
│       ├── MockEditNewsCommandHandler.php
│       └── MockNewsAddCommandHandler.php
├── Controller
│   ├── MockNewsControllerTrait.php
│   └── MockNewsFetchController.php
├── Model
│   └── MockNews.php
└── Repository
    └── MockNewsRepository.php
```