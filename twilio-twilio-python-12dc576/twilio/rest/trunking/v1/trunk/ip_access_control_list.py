# coding=utf-8
"""
This code was generated by
\ / _    _  _|   _  _
 | (_)\/(_)(_|\/| |(/_  v1.0.0
      /       /
"""

from twilio.base import deserialize
from twilio.base import values
from twilio.base.exceptions import TwilioException
from twilio.base.instance_context import InstanceContext
from twilio.base.instance_resource import InstanceResource
from twilio.base.list_resource import ListResource
from twilio.base.page import Page


class IpAccessControlListList(ListResource):

    def __init__(self, version, trunk_sid):
        """
        Initialize the IpAccessControlListList

        :param Version version: Version that contains the resource
        :param trunk_sid: The trunk_sid

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListList
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListList
        """
        super(IpAccessControlListList, self).__init__(version)

        # Path Solution
        self._solution = {
            'trunk_sid': trunk_sid,
        }
        self._uri = '/Trunks/{trunk_sid}/IpAccessControlLists'.format(**self._solution)

    def create(self, ip_access_control_list_sid):
        """
        Create a new IpAccessControlListInstance

        :param unicode ip_access_control_list_sid: The ip_access_control_list_sid

        :returns: Newly created IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        """
        data = values.of({
            'IpAccessControlListSid': ip_access_control_list_sid,
        })

        payload = self._version.create(
            'POST',
            self._uri,
            data=data,
        )

        return IpAccessControlListInstance(
            self._version,
            payload,
            trunk_sid=self._solution['trunk_sid'],
        )

    def stream(self, limit=None, page_size=None):
        """
        Streams IpAccessControlListInstance records from the API as a generator stream.
        This operation lazily loads records as efficiently as possible until the limit
        is reached.
        The results are returned as a generator, so this operation is memory efficient.

        :param int limit: Upper limit for the number of records to return. stream()
                          guarantees to never return more than limit.  Default is no limit
        :param int page_size: Number of records to fetch per request, when not set will use
                              the default value of 50 records.  If no page_size is defined
                              but a limit is defined, stream() will attempt to read the
                              limit with the most efficient page size, i.e. min(limit, 1000)

        :returns: Generator that will yield up to limit results
        :rtype: list[twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance]
        """
        limits = self._version.read_limits(limit, page_size)

        page = self.page(
            page_size=limits['page_size'],
        )

        return self._version.stream(page, limits['limit'], limits['page_limit'])

    def list(self, limit=None, page_size=None):
        """
        Lists IpAccessControlListInstance records from the API as a list.
        Unlike stream(), this operation is eager and will load `limit` records into
        memory before returning.

        :param int limit: Upper limit for the number of records to return. list() guarantees
                          never to return more than limit.  Default is no limit
        :param int page_size: Number of records to fetch per request, when not set will use
                              the default value of 50 records.  If no page_size is defined
                              but a limit is defined, list() will attempt to read the limit
                              with the most efficient page size, i.e. min(limit, 1000)

        :returns: Generator that will yield up to limit results
        :rtype: list[twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance]
        """
        return list(self.stream(
            limit=limit,
            page_size=page_size,
        ))

    def page(self, page_token=values.unset, page_number=values.unset,
             page_size=values.unset):
        """
        Retrieve a single page of IpAccessControlListInstance records from the API.
        Request is executed immediately

        :param str page_token: PageToken provided by the API
        :param int page_number: Page Number, this value is simply for client state
        :param int page_size: Number of records to return, defaults to 50

        :returns: Page of IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListPage
        """
        params = values.of({
            'PageToken': page_token,
            'Page': page_number,
            'PageSize': page_size,
        })

        response = self._version.page(
            'GET',
            self._uri,
            params=params,
        )

        return IpAccessControlListPage(self._version, response, self._solution)

    def get_page(self, target_url):
        """
        Retrieve a specific page of IpAccessControlListInstance records from the API.
        Request is executed immediately

        :param str target_url: API-generated URL for the requested results page

        :returns: Page of IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListPage
        """
        resource_url = self._version.absolute_url(self._uri)
        if not target_url.startswith(resource_url):
            raise TwilioException('Invalid target_url for IpAccessControlListInstance resource.')

        response = self._version.domain.twilio.request(
            'GET',
            target_url,
        )

        return IpAccessControlListPage(self._version, response, self._solution)

    def get(self, sid):
        """
        Constructs a IpAccessControlListContext

        :param sid: The sid

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        """
        return IpAccessControlListContext(
            self._version,
            trunk_sid=self._solution['trunk_sid'],
            sid=sid,
        )

    def __call__(self, sid):
        """
        Constructs a IpAccessControlListContext

        :param sid: The sid

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        """
        return IpAccessControlListContext(
            self._version,
            trunk_sid=self._solution['trunk_sid'],
            sid=sid,
        )

    def __repr__(self):
        """
        Provide a friendly representation

        :returns: Machine friendly representation
        :rtype: str
        """
        return '<Twilio.Trunking.V1.IpAccessControlListList>'


class IpAccessControlListPage(Page):

    def __init__(self, version, response, solution):
        """
        Initialize the IpAccessControlListPage

        :param Version version: Version that contains the resource
        :param Response response: Response from the API
        :param trunk_sid: The trunk_sid

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListPage
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListPage
        """
        super(IpAccessControlListPage, self).__init__(version, response)

        # Path Solution
        self._solution = solution

    def get_instance(self, payload):
        """
        Build an instance of IpAccessControlListInstance

        :param dict payload: Payload response from the API

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        """
        return IpAccessControlListInstance(
            self._version,
            payload,
            trunk_sid=self._solution['trunk_sid'],
        )

    def __repr__(self):
        """
        Provide a friendly representation

        :returns: Machine friendly representation
        :rtype: str
        """
        return '<Twilio.Trunking.V1.IpAccessControlListPage>'


class IpAccessControlListContext(InstanceContext):

    def __init__(self, version, trunk_sid, sid):
        """
        Initialize the IpAccessControlListContext

        :param Version version: Version that contains the resource
        :param trunk_sid: The trunk_sid
        :param sid: The sid

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        """
        super(IpAccessControlListContext, self).__init__(version)

        # Path Solution
        self._solution = {
            'trunk_sid': trunk_sid,
            'sid': sid,
        }
        self._uri = '/Trunks/{trunk_sid}/IpAccessControlLists/{sid}'.format(**self._solution)

    def fetch(self):
        """
        Fetch a IpAccessControlListInstance

        :returns: Fetched IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        """
        params = values.of({})

        payload = self._version.fetch(
            'GET',
            self._uri,
            params=params,
        )

        return IpAccessControlListInstance(
            self._version,
            payload,
            trunk_sid=self._solution['trunk_sid'],
            sid=self._solution['sid'],
        )

    def delete(self):
        """
        Deletes the IpAccessControlListInstance

        :returns: True if delete succeeds, False otherwise
        :rtype: bool
        """
        return self._version.delete('delete', self._uri)

    def __repr__(self):
        """
        Provide a friendly representation

        :returns: Machine friendly representation
        :rtype: str
        """
        context = ' '.join('{}={}'.format(k, v) for k, v in self._solution.items())
        return '<Twilio.Trunking.V1.IpAccessControlListContext {}>'.format(context)


class IpAccessControlListInstance(InstanceResource):

    def __init__(self, version, payload, trunk_sid, sid=None):
        """
        Initialize the IpAccessControlListInstance

        :returns: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        """
        super(IpAccessControlListInstance, self).__init__(version)

        # Marshaled Properties
        self._properties = {
            'account_sid': payload['account_sid'],
            'sid': payload['sid'],
            'trunk_sid': payload['trunk_sid'],
            'friendly_name': payload['friendly_name'],
            'date_created': deserialize.iso8601_datetime(payload['date_created']),
            'date_updated': deserialize.iso8601_datetime(payload['date_updated']),
            'url': payload['url'],
        }

        # Context
        self._context = None
        self._solution = {
            'trunk_sid': trunk_sid,
            'sid': sid or self._properties['sid'],
        }

    @property
    def _proxy(self):
        """
        Generate an instance context for the instance, the context is capable of
        performing various actions.  All instance actions are proxied to the context

        :returns: IpAccessControlListContext for this IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListContext
        """
        if self._context is None:
            self._context = IpAccessControlListContext(
                self._version,
                trunk_sid=self._solution['trunk_sid'],
                sid=self._solution['sid'],
            )
        return self._context

    @property
    def account_sid(self):
        """
        :returns: The account_sid
        :rtype: unicode
        """
        return self._properties['account_sid']

    @property
    def sid(self):
        """
        :returns: The sid
        :rtype: unicode
        """
        return self._properties['sid']

    @property
    def trunk_sid(self):
        """
        :returns: The trunk_sid
        :rtype: unicode
        """
        return self._properties['trunk_sid']

    @property
    def friendly_name(self):
        """
        :returns: The friendly_name
        :rtype: unicode
        """
        return self._properties['friendly_name']

    @property
    def date_created(self):
        """
        :returns: The date_created
        :rtype: datetime
        """
        return self._properties['date_created']

    @property
    def date_updated(self):
        """
        :returns: The date_updated
        :rtype: datetime
        """
        return self._properties['date_updated']

    @property
    def url(self):
        """
        :returns: The url
        :rtype: unicode
        """
        return self._properties['url']

    def fetch(self):
        """
        Fetch a IpAccessControlListInstance

        :returns: Fetched IpAccessControlListInstance
        :rtype: twilio.rest.trunking.v1.trunk.ip_access_control_list.IpAccessControlListInstance
        """
        return self._proxy.fetch()

    def delete(self):
        """
        Deletes the IpAccessControlListInstance

        :returns: True if delete succeeds, False otherwise
        :rtype: bool
        """
        return self._proxy.delete()

    def __repr__(self):
        """
        Provide a friendly representation

        :returns: Machine friendly representation
        :rtype: str
        """
        context = ' '.join('{}={}'.format(k, v) for k, v in self._solution.items())
        return '<Twilio.Trunking.V1.IpAccessControlListInstance {}>'.format(context)
