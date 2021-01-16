<?php

declare(strict_types=1);

namespace App\Ebcms\Web\Http;

use App\Ebcms\Admin\Http\Common;
use App\Ebcms\Admin\Model\Config as ModelConfig;
use Ebcms\Config as EbcmsConfig;
use Ebcms\FormBuilder\Builder;
use Ebcms\FormBuilder\Col;
use Ebcms\FormBuilder\Field\Radio;
use Ebcms\FormBuilder\Field\Text;
use Ebcms\FormBuilder\Field\Textarea;
use Ebcms\FormBuilder\Row;
use Ebcms\FormBuilder\Summary;
use Ebcms\RequestFilter;

class Config extends Common
{
    public function get(
        EbcmsConfig $config
    ) {
        $form = new Builder('网站设置');
        $form->addRow(
            (new Row())->addCol(
                (new Col('col-md-9'))->addItem(
                    (new Summary('基础设置'))->addItem(
                        (new Radio('是否关闭网站', 'ebcms[web][site][close]', $config->get('site.close@ebcms.web'), [[
                            'label' => '开启网站',
                            'value' => 0,
                        ], [
                            'label' => '关闭网站',
                            'value' => 1,
                        ]])),
                        (new Text('关闭原因', 'ebcms[web][site][close_reason]', $config->get('site.close_reason@ebcms.web')))->set('help', '例如：网站维护中...'),
                        (new Text('备案号', 'ebcms[web][site][beian]', $config->get('site.beian@ebcms.web')))->set('help', '例如：京ICP备12345678-1号'),
                        (new Text('联系人电子邮箱', 'ebcms[web][site][email]', $config->get('site.email@ebcms.web')))->set('help', '例如：xxx@xxx.xxx')
                    ),
                    (new Summary('META信息'))->addItem(
                        (new Text('网站名称', 'ebcms[web][meta][name]', $config->get('meta.name@ebcms.web')))->set('help', '网站标题的后缀，一般不宜过长，例如:EBCMS'),
                        (new Text('网站标题', 'ebcms[web][meta][title]', $config->get('meta.title@ebcms.web')))->set('help', '首页标题，例如：好用的网站管理系统'),
                        (new Text('网站关键词', 'ebcms[web][meta][keywords]', $config->get('meta.keywords@ebcms.web')))->set('help', '例如：cms ebcms 内容管理系统'),
                        (new Textarea('网站简介', 'ebcms[web][meta][description]', $config->get('meta.description@ebcms.web')))->set('help', '例如：ebcms是好用的内容管理系统')
                    )
                ),
                (new Col('col-md-3'))->addItem()
            )
        );
        return $form;
    }

    public function post(
        RequestFilter $input,
        ModelConfig $configModel
    ) {
        $configModel->save($input->post());
        return $this->success('更新成功！');
    }
}
