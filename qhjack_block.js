( function ( blocks, element, data, blockEditor ) {
    var el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        useSelect = data.useSelect,
        useBlockProps = blockEditor.useBlockProps;

    registerBlockType( 'qhjack/user', {
        apiVersion: 2,
        title: '用户信息',
        icon: 'universal-access-alt',
        category: 'widgets',
        edit: function () {
            var content;
            var blockProps = useBlockProps();
            content = '用户信息加载中';

            return el( 'div', blockProps, content );
        },
    } );
    registerBlockType( 'qhjack/copyright', {
        apiVersion: 2,
        title: '版权声明',
        icon: 'universal-access-alt',
        category: 'widgets',
        edit: function () {
            var content;
            var blockProps = useBlockProps();
            content = '版权声明加载中';

            return el( 'div', blockProps, content );
        },
    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.data,
    window.wp.blockEditor
);
