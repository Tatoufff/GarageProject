<?php

class Feature extends FeatureCore {};
class QuickAccess extends QuickAccessCore {};
class Access extends AccessCore {};
class Attachment extends AttachmentCore {};
class Link extends LinkCore {};
class Tools extends ToolsCore {};
class SupplyOrder extends SupplyOrderCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvtReason extends StockMvtReasonCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class Stock extends StockCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockMvt extends StockMvtCore {};
class State extends StateCore {};
class Gender extends GenderCore {};
class Carrier extends CarrierCore {};
class Product extends ProductCore {};
class LinkProxy extends LinkProxyCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class AddressValidator extends AddressValidatorCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CartChecksum extends CartChecksumCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRule extends TaxRuleCore {};
class Tax extends TaxCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class ImageType extends ImageTypeCore {};
class Language extends LanguageCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class Order extends OrderCore {};
class OrderDetail extends OrderDetailCore {};
class OrderState extends OrderStateCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderMessage extends OrderMessageCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderSlip extends OrderSlipCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderReturn extends OrderReturnCore {};
class Profile extends ProfileCore {};
class Risk extends RiskCore {};
class AddressFormat extends AddressFormatCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDF extends PDFCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class Tab extends TabCore {};
abstract class Controller extends ControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Contact extends ContactCore {};
class Manufacturer extends ManufacturerCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Customization extends CustomizationCore {};
class GroupLang extends GroupLangCore {};
class ContactLang extends ContactLangCore {};
class AttributeLang extends AttributeLangCore {};
class GenderLang extends GenderLangCore {};
class ProfileLang extends ProfileLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class ThemeLang extends ThemeLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class CarrierLang extends CarrierLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class CategoryLang extends CategoryLangCore {};
class MetaLang extends MetaLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class DataLang extends DataLangCore {};
class FeatureLang extends FeatureLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class TabLang extends TabLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class RiskLang extends RiskLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperView extends HelperViewCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperKpi extends HelperKpiCore {};
class HelperShop extends HelperShopCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperList extends HelperListCore {};
class HelperCalendar extends HelperCalendarCore {};
class Helper extends HelperCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperForm extends HelperFormCore {};
class Pack extends PackCore {};
class Notification extends NotificationCore {};
class DateRange extends DateRangeCore {};
class ProductDownload extends ProductDownloadCore {};
class CMS extends CMSCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class Module extends ModuleCore {};
class Upgrader extends UpgraderCore {};
class Message extends MessageCore {};
class CustomerMessage extends CustomerMessageCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class CartRule extends CartRuleCore {};
class AddressChecksum extends AddressChecksumCore {};
class Validate extends ValidateCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Cart extends CartCore {};
class AttributeGroup extends AttributeGroupCore {};
class FeatureValue extends FeatureValueCore {};
class CSV extends CSVCore {};
class DbQuery extends DbQueryCore {};
abstract class Db extends DbCore {};
class DbPDO extends DbPDOCore {};
class DbMySQLi extends DbMySQLiCore {};
class ProductSupplier extends ProductSupplierCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Meta extends MetaCore {};
class Page extends PageCore {};
class ImageManager extends ImageManagerCore {};
class CMSCategory extends CMSCategoryCore {};
class FileUploader extends FileUploaderCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Cookie extends CookieCore {};
class CacheApc extends CacheApcCore {};
abstract class Cache extends CacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class Connection extends ConnectionCore {};
class Supplier extends SupplierCore {};
class LocalizationPack extends LocalizationPackCore {};
class Employee extends EmployeeCore {};
class CMSRole extends CMSRoleCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class ProductSale extends ProductSaleCore {};
abstract class ObjectModel extends ObjectModelCore {};
class RequestSql extends RequestSqlCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class CustomizationField extends CustomizationFieldCore {};
class Customer extends CustomerCore {};
class Search extends SearchCore {};
class Chart extends ChartCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Currency extends CurrencyCore {};
class Uploader extends UploaderCore {};
class JavascriptManager extends JavascriptManagerCore {};
class JsMinifier extends JsMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CccReducer extends CccReducerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class TemplateFinder extends TemplateFinderCore {};
class SupplierAddress extends SupplierAddressCore {};
class Zone extends ZoneCore {};
class Country extends CountryCore {};
class Windows extends WindowsCore {};
class Curve extends CurveCore {};
class Store extends StoreCore {};
class Dispatcher extends DispatcherCore {};
class Mail extends MailCore {};
class SpecificPrice extends SpecificPriceCore {};
class Tag extends TagCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Attribute extends AttributeCore {};
class Address extends AddressCore {};
class Guest extends GuestCore {};
class Alias extends AliasCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Translate extends TranslateCore {};
class Hook extends HookCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Delivery extends DeliveryCore {};
class Configuration extends ConfigurationCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class SearchEngine extends SearchEngineCore {};
class Media extends MediaCore {};
class CustomerThread extends CustomerThreadCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class FormField extends FormFieldCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class Referrer extends ReferrerCore {};
class Group extends GroupCore {};
class GroupReduction extends GroupReductionCore {};
class Combination extends CombinationCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class Image extends ImageCore {};
class CustomerAddress extends CustomerAddressCore {};
class ProductAssembler extends ProductAssemblerCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Context extends ContextCore {};
class Category extends CategoryCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
